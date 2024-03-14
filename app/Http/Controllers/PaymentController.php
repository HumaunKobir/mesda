<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Storage;
use App\Models\Payment;

class PaymentController extends Controller
    {
       
    public function redirectToLogin()
    {
        return redirect()->route('login')->with('redirect_back', true);
    }

    //For Event Member
    public function eventMemberCheckout(){
        return view('paymentCheckout');
    }

    //For Register User
    public function paymentCheckout(Request $request){
    
        if (!Auth::check()) {
            return $this->redirectToLogin();
        }
        
        if (!Auth::check()) {
            return $this->redirectToLogin();
        }
        $payments=null;
        if($request->isMethod('post')){
            $data = $request->all();
              
            $payments= new Payment;
            $payments->name = $data['customer_name'];
            $payments->email = $data['customer_email'];
            $payments->phone = $data['customer_mobile'];
            $payments->amount =1000;
            $payments->upozilla = $data['thana'];
            $payments->village = $data['village'];
            $payments->post_office = $data['post_office'];
            $payments->status = 'panding';
            $payments->transection_id = '65f1c2e1a1971';
            $payments->currency = 'BD';
            $payments->save();
            return redirect()->back()->with("success_message","Payment Successfully!");

        }
             return view('paymentCheckout')->with(compact('payments'));
        
    }

    public function paymentHosted()
    {
        return view('paymentHosted');
    }
    //Downloading Invoice
    public function downloadInvoice($path)
        {
            $filePath = storage_path('app/' . $path);

            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                abort(404);
            }
        }
    
    

}
