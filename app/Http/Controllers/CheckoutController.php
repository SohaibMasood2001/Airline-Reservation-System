<?php

namespace App\Http\Controllers;
use App\Models\FlightClass;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51NIeWEAVmcPAOEIQfxDTqVgICUifnPEi9pV0vssf5n2TFM7aTxy5gStpG5EAQkDlt59cnbpyDUnkM9DpBZHcdnqC00i9xrdpZx');

        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'USD',
			'description' => 'Payment from Sohaib Masood',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('credit-card',compact('intent'));

    }

    public function afterPayment()
    {
      
        return redirect('/home')->with('success', 'Payment Received, Thank you for using our services.');
    }
}
