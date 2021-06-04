<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribers(Request $request)
    {
        $subscribers = new Subscriber();
        $subscribers->email = $request->email;
        $subscribers->save();
        return redirect()->back();
    }
    public function viewSubscribers()
   {
       return view('admin.subscribers.subscribers', ['subscribers' => Subscriber::all()]);

   }
   public function delete($id)
   {
       $brand = Subscriber::find($id);
       $brand->delete();
       return redirect('/view-subscribers')->with('message', 'Subscribers info delete successfully');
   }
}
