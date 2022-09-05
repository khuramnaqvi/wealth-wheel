<?php

namespace App\Http\Controllers;

use App\Models\Adminwallet;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\wallet;
use DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID', 'AUVgR-fGmGuOqfOjZIsKhm65sUD6UDbbg6ag-9igPtw5_2rM1UCz82xw5dOgawM3zGOMNE1nN95L4uSv'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET', 'EOFcpLGqhMDIWHjKmO6Xv6f-uSjSOQRx9P7XwElW-6Mp6bi6O2Kx5XqR9nSzXpGVSPIy1KH4oyi5MWRI'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
   
    /**
     * Call a view.
     */
    // public function index()
    // {
    //     return view('payment');
    // }
   
    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
      
        
        
            try {
               
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('price'),
                    'currency' => env('PAYPAL_CURRENCY', 'USD'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
               
                return $e->getMessage();
            }
        
    }
   
    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
       
        
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                $total =   $arr_body['transactions'][0]['amount']['total'];

                // Insert transaction data into the database
               //for user 
                $up = 92.5/100;
                $user_percent = $up * $total;
                $user_payment = new wallet;
                $user_payment->user_id = Auth::user()->id;
                $user_payment->wheel_id = "";
                $user_payment->amount = $user_percent;
                $user_payment->save();

                //for admin
                $ad = 7.5/100;
                $admin_percent = $ad * $total;
                $admin_payment = new Adminwallet;
                $user_payment->wheel_id = "";
                $admin_payment->user_id = Auth::user()->id;
                $admin_payment->amount = $admin_percent;
                $admin_payment->save();


                $payment = new Payment;
                $payment->payment_id = $arr_body['id'];
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY', 'USD');
                $payment->payment_status = $arr_body['state'];
                $payment->save();

                
                return redirect('availabe_wealth_wheel')->with('success', 'Payment Successfull');  
                // return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } 
        else {
            return 'Transaction is declined';
        }
    }


    public function paypal_deposit_balance(Request $request)
    {
        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paypal_success'),
                    'cancelUrl' => url('error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }

    public function paypal_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
            
                // Insert transaction data into the database
                $payment = new Payment;
                $payment->payment_id = $arr_body['id'];
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $balance = $arr_body['transactions'][0]['amount']['total'];
                $payment->amount = $balance;
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr_body['state'];
                $payment->save();

                $affected = DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(['balance' => auth()->user()->balance + $balance]);

                    
                // dd($arr_body);
                // return "Payment is successful. Your transaction id is: ". $arr_body['id'];

                return back()->with('success', 'Payment Successfull');
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }



   
    /**
     * Error Handling.
     */
    public function error()
    {
        
        return 'User cancelled the payment.';
    }
}
