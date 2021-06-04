<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            TopOne.com
{{--                            <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">--}}
                        </td>

                        <td>
                            Invoice #: 00{{$order->id}}<br>
                            Created Date: {{date('Y-m-d')}}<br>
                            order Date: {{$order->order_date}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <h3 style="margin-bottom: 5px;">Billing Info</h3>
                            {{$customer->name}}<br/>
                            {{$customer->email}}<br/>
                            {{$customer->mobile}}<br/>
                            {{$customer->address}}
                        </td>

                        <td>
                            <h3 style="margin-bottom: 5px;">Shipping Info</h3>
                            {{$shipping->name}}<br/>
                            {{$shipping->email}}<br/>
                            {{$shipping->mobile}}<br/>
                            {{$shipping->address}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="2">
                <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="item">
            <td colspan="2">
                <table>
                    <?php $sum = 0; ?>
                    @foreach($products as $product)
                    <tr>
                        <th>{{$product->product_name}}</th>
                        <th>{{$product->product_price}}</th>
                        <th>{{$product->product_qty}}</th>
                        <th>{{$total = $product->product_price*$product->product_qty}}</th>
                    </tr>
                    <?php $sum += $total; ?>
                    @endforeach
                </table>
            </td>
        </tr>

        <tr class="total">
            <td></td>

            <td>
                Total: {{$sum}}
            </td>
        </tr>
    </table>
</div>
</body>
</html>
