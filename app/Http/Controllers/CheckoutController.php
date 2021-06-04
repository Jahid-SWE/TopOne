<?php

namespace App\Http\Controllers;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Session;
use Cart;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('front.checkout.checkout', [
            'categories'    => Category::where('status', 1)->get(),
        ]);
    }

    public function checkEmailAddress()
    {
        $email = $_GET['email'];

        $customer = Customer::where('email', $email)->first();
        if($customer)
        {
            $date = [
              'success' => false,
              'message' => 'Sorry, this email address already exists. Please try another one.'
            ];
        }
        else
        {
            $date = [
                'success' => true,
                'message' => 'This email address available.'
            ];
        }
        return json_encode($date);
    }


    public function newCustomer(Request $request)
    {
      $customer = new Customer();
      $customer->name   = $request->name;
      $customer->email  = $request->email;
      $customer->password = bcrypt($request->password);
      $customer->mobile   = $request->mobile;
      $customer->address  = $request->address;
      $customer->save();

      Session::put('customer_id', $customer->id);
      Session::put('customer_name', $customer->name);

//      return redirect('/show-shipping')->with('message', 'Congratulation...your registration process is complete. Now please give us product shipping information to complete your valuable order.');
      return redirect()->back()->with('message', 'Congratulation...your registration process is complete. Now please give us product shipping information to complete your valuable order.');
    }

    public function customerLogout(Request $request)
    {
      Session::forget('customer_id');
      Session::forget('customer_name');

      return redirect('/')->with('message', 'You are successfully logout.');
    }

    public function customerLogin(Request $request)
    {
      $customer = Customer::where('email', $request->email)->first();
      if($customer) {
        if (password_verify($request->password, $customer->password)) {
              Session::put('customer_id', $customer->id);
              Session::put('customer_name', $customer->name);
              return redirect('/show-shipping')->with('message', 'Congratulation...Login success. Now please give us product shipping information to complete your valuable order.');
        } else {
            return redirect()->back()->with('message', 'Sorry Your password is wrong.');
        }
      }
      else
      {
        return redirect()->back()->with('message', 'Sorry Your email address is wrong.');
      }
    }


    public function shipping()
    {
      return view('front.checkout.shipping', [
          'categories'    => Category::where('status', 1)->get(),
          'customer'      => Customer::find(Session::get('customer_id'))
      ]);
    }

    public function newShipping(Request $request)
    {
      $shipping = new Shipping();
      $shipping->name   = $request->name;
      $shipping->email  = $request->email;
      $shipping->mobile   = $request->mobile;
      $shipping->address  = $request->address;
      $shipping->save();

      Session::put('shipping_id', $shipping->id);

      return redirect('/show-payment')->with('message', 'Order shipping info save successfully. Now please give us payment information to complete your valuable order.');
    }

    public function payment()
    {
      return view('front.checkout.payment', [
          'categories'    => Category::where('status', 1)->get(),
      ]);
    }

    public function newOrder(Request $request)
    {
      $paymentMethod = $request->payment_method;
      if($paymentMethod == 'cash')
      {
        $order = new Order();
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = Session::get('shipping_id');
        $order->order_total = Session::get('grand_total');
        $order->order_date  = date('Y-m-d');
        $order->payment_type= $paymentMethod;
        $order->save();


        $cartProducts = Cart::content();
        foreach($cartProducts as $cartProduct)
        {
          $orderDetail = new OrderDetail();
          $orderDetail->order_id      = $order->id;
          $orderDetail->product_id    = $cartProduct->id;
          $orderDetail->product_name  = $cartProduct->name;
          $orderDetail->product_image = $cartProduct->options->image;
          $orderDetail->product_price = $cartProduct->price;
          $orderDetail->product_qty   = $cartProduct->qty;
          $orderDetail->save();

          Cart::remove($cartProduct->rowId);

          $product = Product::find($cartProduct->id);
          $product->stock_amount = ($product->stock_amount - $cartProduct->qty);
          $product->save();
        }

        $payment = new Payment();
        $payment->order_id = $order->id;
        $payment->payment_method = $paymentMethod;
        $payment->payment_amount = 0;
        $payment->payment_date = date('Y-m-d');
        $payment->save();

        Session::put('grand_total', 0);

        return redirect('/complete-order')->with('message', 'Your order info save successfully. We will contact with you soon.');
      }
      else if($paymentMethod == 'bkash')
      {

      }
      else if($paymentMethod == 'online')
      {
        return view('front.checkout.online-payment',[
            'categories'    => Category::where('status', 1)->get(),
            'customer'      => Customer::find(Session::get('customer_id')),
            'tran_id'       => rand(1, 100000000),
            'payment_method'=>$paymentMethod,
        ]);
      }
    }

    public function confirmOnlinePayment(Request $request)
    {
        return $request->all();
    }

    public function completeOrder()
    {
        return view('front.checkout.complete-order',[
            'categories'    => Category::where('status', 1)->get(),
        ]);
    }
    public function pay(Request  $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount']= Session::get('grand_total');
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique
        # CUSTOMER INFORMATION
        $post_data['cus_name'] =$request->input('cus_name');

        $post_data['cus_email'] =$request->input('cus_name');

        $post_data['cus_add1'] = $request->input('cus_add1');
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = $request->input('city');
        $post_data['cus_state'] = $request->input('state');
        $post_data['cus_postcode'] = $request->input('zip');
        $post_data['cus_country'] = $request->input('country');
        $post_data['cus_phone'] = $request->input('customer_mobile');
        $post_data['order_total']= Session::get('grand_total');
        $post_data['order_date']= date('Y-m-d');
        $post_data['customer_id'] = Session::get('customer_id');
        $post_data['shipping_id'] = Session::get('shipping_id');
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
//                'name' => $post_data['cus_name'],
//                'email' => $post_data['cus_email'],
//                'phone' => $post_data['cus_phone'],
//                'address' => $post_data['cus_add1'],
                'payment_status' => 'Pending',
                'payment_type' => $request->payment_method,

                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'order_total'=>$post_data['order_total'],
                'order_date'=>$post_data['order_date'],
                'customer_id' => $post_data['customer_id'],
                'shipping_id'=> $post_data['shipping_id']
            ]);
        $id = DB::getPdo()->lastInsertId();

        $cartProducts = Cart::content();
        foreach($cartProducts as $cartProduct)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id      =  $id;
            $orderDetail->product_id    = $cartProduct->id;
            $orderDetail->product_name  = $cartProduct->name;
            $orderDetail->product_image = $cartProduct->options->image;
            $orderDetail->product_price = $cartProduct->price;
            $orderDetail->product_qty   = $cartProduct->qty;
            $orderDetail->save();

            Cart::remove($cartProduct->rowId);

            $product = Product::find($cartProduct->id);
            $product->stock_amount = ($product->stock_amount - $cartProduct->qty);
            $product->save();

        }


        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
    public function success(Request $request)
    {

//        echo "Transaction is Successful";
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'payment_status', 'currency', 'order_total')->first();

        if ($order_detials->payment_status == 'Pending') {
//            $validation = $sslc->orderValidate($tran_id, $amount, $currency, $request->all());
            $validation = true;
            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['payment_status' => 'Successful','order_status'=>'Successful']);
                 return redirect()->route('home');

//                return redirect('/candidateHome')
//                    ->with('transaction','Transaction is successfully completed');

            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['payment_status' => 'Failed']);
                echo "validation Fail";
            }
        } else if ($order_detials->payment_status == 'Processing' || $order_detials->payment_status == 'Successful') {
            echo 'transaction is successfull';
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */


//            return redirect('/candidateHome')->with('success','Transaction is successfully completed');
        } else
        {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }




    }
    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($tran_id, $order_details->amount, $order_details->currency, $request->all());
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    echo "validation Fail";
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                    #That means Order status already updated. No need to udate database.

                    echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }
}
