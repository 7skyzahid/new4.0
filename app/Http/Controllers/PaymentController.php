<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\offers;
use App\payment;
use Illuminate\Support\Facades\Input;
use Braintree_Transaction;
use Braintree_Customer;
use Braintree_WebhookNotification;
use Illuminate\Support\Facades\DB;
use Braintree_Subscription;
use Braintree_CreditCard;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Skills;
use App\Profile;
use App\Blog;
use Validator;
use Session;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function addpayment()
    {
        return view('braintree.payment');
    }


    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    public function __construct() {
    }

   public function addOrder()
    {
        $input = Input::all();

        $subscribed= false;
        if(isset($input['subscribed']))
        {
            $subscribed= true;
        }
        $customer_id = $this->registerUserOnBrainTree();
        //dd($customer_id);
        $card_token = $this->getCardToken($customer_id,$input['cardNumber'],$input['cardExpiry'],$input['cardCVC']);

        // gateway will provide this plan id whenever you creat plans there
        $plan_id = '2npb';
        //dd($card_token);
        if(isset($input['senderid'])){
            $senderid = DB::table('users')
                    ->select('id')
                    ->where('name','=',$input['senderid'])
                    ->first();
        }
        if(isset($input['reciever'])){
            $recieverid = DB::table('users')
                ->select('id')
                ->where('name','=',$input['reciever'])
                ->first();
        }
        $transction_id = $this->createTransaction($card_token,$customer_id,$plan_id,$subscribed);
        if(!empty($transction_id)){
            $payment = new payment();
            $payment->transaction_id = $transction_id;
            $payment->token_id = $card_token;
            $payment->bid_id = $input['bidid'];
            $payment->propost_id = $input['projectid'];
            $payment->userid = $senderid->id;
            $payment->save();
        }

        //saving into offers table

        $offers = new offers();
        $offers->bid_id = $input['bidid'];
        $offers->projpost_id = $input['projectid'];
        $offers->amount = $input['amountoffer'];
        $offers->revision = $input['revision'];
        $offers->createdBy = $senderid->id;
        $offers->recieverid = $recieverid->id;
        $offers->description = $input['description'];
        $offers->save();
        return redirect()->action('PaymentController@getlist');
    }


    public function registerUserOnBrainTree() {
        $result = Braintree_Customer::create(array(
            'firstName' => 'Saurabh',
            'lastName' => 'Sharma',
            'email' => 'info@coding4developers.com',
            'phone' => '9999999999'
        ));
        if ($result->success) {
            return $result->customer->id;
        } else {
            $errorFound = '';
            foreach ($result->errors->deepAll() as $error) {
                $errorFound .= $error->message . "<br />";
            }
            echo $errorFound ;
        }
    }


    public function getCardToken($customer_id,$cardNumber,$cardExpiry,$cardCVC)
    {
        $card_result = Braintree_CreditCard::create(array(
        //'cardholderName' => mysql_real_escape_string($_POST['full_name']),
            'number' => $cardNumber,
            'expirationDate' => trim($cardExpiry),
            'customerId' => $customer_id,
            'cvv' => $cardCVC
        ));
        if($card_result->success)
        {
            return $card_result->creditCard->token;
        }
        else {
            return false;
        }
    }


    public function createTransaction($creditCardToken,$customerId,$planId,$subscribed){

        $result = Braintree_Transaction::sale(
            [
                'customerId' => $customerId,
                'amount' => 20,
                'orderId' => '908765',
                 'paymentMethodToken' => $creditCardToken
            ]
        );
       // var_dump($result);exit();
        if ($result->success) {
            return $result->transaction->id;
        } else {
            $errorFound = '';
            foreach ($result->errors->deepAll() as $error1) {
                $errorFound .= $error1->message . "<br />";
            }
        }
    }


    public function cancelSubscription()
    {
        $gateway_subscription_id = '';
        if($gateway_subscription_id!='')
        {
            Braintree_Subscription::cancel($gateway_subscription_id);
        }
    }


//// for subscription Braintree_WebhookNotification
    public function subscription()
    {
        try{
            if(isset($_POST["bt_signature"]) && isset($_POST["bt_payload"])) {
                $webhookNotification = Braintree_WebhookNotification::parse(
                    $_POST["bt_signature"], $_POST["bt_payload"]
                );// $message =
// "[Webhook Received " . $webhookNotification->timestamp->format('Y-m-d H:i:s') . "] "
// . "Kind: " . $webhookNotification->kind . " | "
// . "Subscription: " . $webhookNotification->subscription->id . "\n";Log::info("msg " . Log::info("subscription " . json_encode($webhookNotification->subscription));
                Log::info("transactions " . json_encode($webhookNotification->subscription->transactions));
                Log::info("transactions_id " . json_encode($webhookNotification->subscription->transactions[0]->id));
                Log::info("customer_id " . json_encode($webhookNotification->subscription->transactions[0]->customerDetails->id));
                Log::info("amount " . json_encode($webhookNotification->subscription->transactions[0]->amount));
            }
        }
        catch (\Exception $ex) {
            Log::error("PaymentController::subscription() " . $ex->getMessage());
        }
    }
     public function getlist(){
       if(Auth::user()){
           $username = Auth::user()->id;
           $getlist = DB::table('offers')
                    ->where('createdby','=',$username)
                    ->orWhere('recieverid','=',$username)
                    ->select('description','bid_id','projpost_id','amount','recieverid','createdby','created_at')
                    ->get();
           //dd($getlist);
           return view('braintree.orderlist')->with('getlist',$getlist);
       }
    }
}

