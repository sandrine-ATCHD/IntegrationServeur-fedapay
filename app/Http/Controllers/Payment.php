<?php

namespace App\Http\Controllers;
use FedaPay\FedaPay;
use FedaPay\Transaction;


use Illuminate\Http\Request;

class Payment extends Controller
{
  
 public function matransaction()
 {
try

{
    Fedapay::setApiKey('sk_sandbox_kioEKnopal4X0GPO9N9L7OOk');
    FedaPay::setEnvironment('sandbox');
// Créer la transaction
$transaction = Transaction::create([
    "description" => "Article 2309ART",
    "amount" => 15000,
     "currency" => ["iso" => "XOF"],
    "callback_url" => route('feda.callback'),
   
]);

  $token = $transaction->generateToken();
  return redirect()->to($token->url);
}
catch (\Exception $e) {
    // En cas d'erreur, log l'exception
    \Log::error('Error processing payment: ' . $e->getMessage());

    // Retourne une réponse d'erreur au frontend
    return redirect()-> back()-> withErrors(['error'=> $e->getMessage()]);
}
}


   public function callback(Request $request)
   {
    $transactionId = $request->input('id'); 
    
    $transaction = Transaction::retrieve($transactionId);


    if ($transaction->status === 'approved')
    try{
        
      return redirect()-> back()-> withMessage('reussite');
    }

    catch(\Exception $e)
    {
        return redirect()
        -> route('base')
        ->withErrors(['error' => 'Transaction échouée ou en attente. Veuillez réessayer.']);


    }

   }


  }




