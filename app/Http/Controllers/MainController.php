<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Services;
use App\Models\Bookings;
use App\Models\Quotes;
use App\Models\Trainings;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Mail\NotifyAdminForTraining;
use App\Mail\NotifyAdminForQuote;
use App\Mail\NotifyTrainee;
use Session;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function redirectToShop(Request $req){
        
        
        // return Http::get('http://shop.reohob.com/'.str_replace($req->path(),'','/shop'));
        $data = str_replace($req->path(),'','/shop');
        return view('shop', ['data' => $data]);
    }
    public function test() {

        $orders = Quotes::where('id', 1)->first();
        // send mail to user on successful submit.

        $data = $orders;
        // try {

        //     Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com'])->send(new NotifyAdminForQuote($data));  

        // } catch (\Throwable $th) {
        //     // throw $th;
        // }   

        return \Response::json(['message' => 'success']);

    }

    public function quote() {

        $services = Services::orderBy('created_at', 'desc')->get();
        return view('web.quote', compact(['services',]));  

    }

    public function quoteForm (Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'location' => 'required',
            'property' => 'required',
            'service' => 'required|numeric',
            'rooms' => 'required|numeric',
            'fan' => 'required',
            'acs' => 'required|numeric',
            'tvs' => 'required|numeric',
            'freezer' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            
            // return \Response::json(['message' => 'error']);
            return \Response::json(['message' => $validator->messages()]);

            
        }
        
        if ($request->faxonly) {
            
            // return redirect()->back()
            //     ->withSuccess('Your form has been submitted'); 
            return \Response::json(['message' => 'success', 'recomendation' => 'recomendation', 'products' => [] ]);
                
        }

        // algorithim for the quote
            switch ($request->rooms) {

                case "1":
                    if ((($request->tvs >= 1) || ($request->acs <= 0)) && ($request->freezer <= 0)) {
                
                        $recomendation = "1.5KVA 24V";
                        $searchTerm = "1.5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer <= 0)) {
                        $recomendation = "2KVA 24V";
                        $searchTerm = "2KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer >= 1)) {
                        $recomendation = "5KVA 48V";
                        $searchTerm = "5KVA";
                        
                    } else {

                        $recomendation = "1KVA 12V";
                        $searchTerm = "1KVA";

                    }
                
                break;


                
                case "2":
                
                    if ((($request->tvs >= 1) || ($request->acs <= 0)) && ($request->freezer <= 0)) {
                
                        $recomendation = "2KVA 24V";
                        $searchTerm = "2KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer <= 0)) {
                        $recomendation = "3.5KVA 48V";
                        $searchTerm = "3.5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer >= 1)) {
                        $recomendation = "5KVA 48V";
                        $searchTerm = "5KVA";
                        
                    } else {

                        $recomendation = "1.5KVA 24V";
                        $searchTerm = "1.5KVA";

                    }

                break;
                case "3":

                    if ((($request->tvs >= 1) || ($request->acs <= 0)) && ($request->freezer <= 0)) {
                
                        $recomendation = "3.5KVA 48V";
                        $searchTerm = "3.5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer <= 0)) {
                        $recomendation = "3.5KVA 48V";
                        $searchTerm = "3.5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer >= 1)) {
                        $recomendation = "5KVA 96V";
                        $searchTerm = "5KVA";
                        
                    } else {

                        $recomendation = "2KVA 24V";
                        $searchTerm = "2KVA";

                    }

                break;
                case "4":
                    if ((($request->tvs >= 1) || ($request->acs <= 0)) && ($request->freezer <= 0)) {
                
                        $recomendation = "3.5KVA 48V";
                        $searchTerm = "3.5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer <= 0)) {

                        $recomendation = "5KVA 48V";
                        $searchTerm = "5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer >= 1)) {
                        $recomendation = "5KVA 96V";
                        $searchTerm = "5KVA";
                        
                    } else {

                        $recomendation = "3.5KVA 48V";
                        $searchTerm = "3.5KVA";

                    }
                break;
                case "5":
                    if ((($request->tvs >= 1) || ($request->acs <= 0)) && ($request->freezer <= 0)) {
                
                        $recomendation = "5KVA 96V";
                        $searchTerm = "5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer <= 0)) {

                        $recomendation = "5KVA 96V";
                        $searchTerm = "5KVA";

                    } elseif ((($request->tvs >= 1) || ($request->acs >= 1)) && ($request->freezer >= 1)) {

                        $recomendation = "8KVA 96V";
                        $searchTerm = "8KVA";
                        
                    } else {

                        $recomendation = "5KVA 48V";
                        $searchTerm = "5KVA";

                    }
                break;

                default:
                    $recomendation = "1KVA 12V";
                    $searchTerm = "1KVA";
            }

            $products = Product::query() 
                ->where([
                    ['name', 'LIKE', "%{$recomendation}%" ],
                    ]) 
                ->orderBy('name', 'asc')->get();
                
                
                $orders = new Quotes;
                $orders->full_name = $request->name;
                $orders->phone = $request->phone;
                $orders->email = $request->email;
                $orders->location = $request->location;
                $orders->service_id = $request->service;
                $orders->property = $request->property;
                $orders->rooms = $request->rooms;
                $orders->batteries = $request->fan;
                $orders->ac = $request->acs;
                $orders->tv = $request->tvs;
                $orders->freezer = $request->freezer;
                $orders->save();
        
                
                // send mail to user on successful submit.
                $data = $orders;
        
                try {
        
                    Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com'])->send(new NotifyAdminForQuote($data));  
        
                } catch (\Throwable $th) {
                    
                }  
            
        return \Response::json(['message' => 'success', 'recomendation' => $recomendation, 'products' => $products]);


    }

    public function quoteProcess (Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'location' => 'required',
            'property' => 'required',
            'service' => 'required|numeric',
            'rooms' => 'required|numeric',
            'fan' => 'required',
            'acs' => 'required|numeric',
            'tvs' => 'required|numeric',
            'freezer' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            
            return \Response::json(['message' => $validator->messages()]);
            
        }

        // $orders = new Quotes;
        // $orders->full_name = $request->name;
        // $orders->phone = $request->phone;
        // $orders->email = $request->email;
        // $orders->location = $request->location;
        // $orders->service_id = $request->service;
        // $orders->property = $request->property;
        // $orders->rooms = $request->rooms;
        // $orders->batteries = $request->fan;
        // $orders->ac = $request->acs;
        // $orders->tv = $request->tvs;
        // $orders->freezer = $request->freezer;
        // $orders->save();

        
        // send mail to user on successful submit.
        $data = $orders;

        try {

            Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com'])->send(new NotifyAdminForQuote($data));  

        } catch (\Throwable $th) {
            
        }   

        return \Response::json(['message' => 'success']);


    }

    public function processForm(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'location' => 'required',
            'service' => 'required|numeric',
            // 'rooms' => 'required|numeric',
            // 'batteries' => 'required',
            // 'acs' => 'required|numeric',
            // 'tvs' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            
            return \Response::json(['message' => 'error']);
            
        }

        $orders = new Bookings;
        $orders->full_name = $request->name;
        $orders->phone = $request->phone;
        $orders->email = $request->email;
        $orders->location = $request->location;
        $orders->service_id = $request->service;
        // $orders->rooms = $request->rooms;
        // $orders->batteries = $request->batteries;
        // $orders->ac = $request->acs;
        // $orders->tv = $request->tvs;
        $orders->message = $request->message ?? null;
        $orders->save();

        // send mail to user on successful submit.

        $data = $orders;

        try {

            Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com'])->send(new NotifyAdmin($data));  

        } catch (\Throwable $th) {
            
        }

        return \Response::json(['message' => 'success']);

    }

    public function contactForm(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'location' => 'required',
            // 'service' => 'required|numeric',
            // 'rooms' => 'required|numeric',
            // 'batteries' => 'required',
            // 'acs' => 'required|numeric',
            // 'tvs' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            
            // return \Response::json(['message' => 'error']);
            return redirect()->back()->with('error', 'Validation failed!');

            
        }
        
        if ($request->faxonly) {
            return redirect()->back()->with('success', 'Message sent successfully!');
        }


        $orders = new Bookings;
        $orders->full_name = $request->name;
        $orders->phone = $request->phone;
        $orders->email = $request->email;
        $orders->location = $request->location;
        $orders->message = $request->message ?? null;
        $orders->save();

        // send mail to user on successful submit.

        $data = $orders;

        try {

            Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com'])->send(new NotifyAdmin($data));  

        } catch (\Throwable $th) {
            
        }

        // return \Response::json(['message' => 'success']);
        return redirect()->back()->with('success', 'Message sent successfully!');


    }

    public function trainingForm(Request $request) {

        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'package' => 'required',
            'enginer_know_how' => 'required',
            'reference' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->messages());
        }



        $training = new Trainings;
        $training->first_name = $request->first_name;
        $training->last_name = $request->last_name;
        $training->phone = $request->phone;
        $training->email = $request->email;
        $training->address = $request->address;
        $training->package = $request->package;
        $training->enginer_know_how = $request->enginer_know_how;
        $training->paid = false;
        $training->save();


        // $data = $training;

        Session(['trainings_id' => $training->id]);

         // create a random number and add the current second to it

         $paymentRef = 'PMRF'.rand(1000000,9999999).date("s");
         Session(['paymentRef' => $paymentRef]);
 
 
         if ($request->package == "basic") {
             $package = "150000";
         } else {
            $package = "280000";
         }
         $amount = $package;
         Session(['amount' => $amount]);
 
 
         $paystack = new \Yabacon\Paystack(config('app.PAYSTACK_SECRET_KEY'));
 
             $responseObj = $paystack->transaction->initialize([
                 "reference" => $paymentRef,
                 "amount" => $amount * 100,
                 "email" => $request->email,
                 "currency" => "NGN",
             ]);
             
             $responseObj = json_decode(json_encode($responseObj), true);
 
             // return $responseObj;
             if ($responseObj) {
                 return redirect($responseObj['data']['authorization_url']);
             } else {
                 return redirect()->back()->with('error', 'Something Went Wrong!');
             }

             
        


    }

    public function verifyPayment(Request $request) {

        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'package' => 'required',
            'enginer_know_how' => 'required',
            'reference' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->messages());
        }



        $training = new Trainings;
        $training->first_name = $request->first_name;
        $training->last_name = $request->last_name;
        $training->phone = $request->phone;
        $training->email = $request->email;
        $training->address = $request->address;
        $training->package = $request->package;
        $training->enginer_know_how = $request->enginer_know_how;
        $training->paid = false;
        $training->save();

        Session(['trainings_id' => $training->id]);
        // create a random number and add the current second to it

         $paymentRef = $request->reference;
         Session(['paymentRef' => $paymentRef]);
 
 
         if ($request->package == "basic") {
             $package = "150000";
         } else {
            $package = "280000";
         }
         $amount = $package;
         Session(['amount' => $amount]);


        if ($request->reference) {

            $paystack = new \Yabacon\Paystack(config('app.PAYSTACK_SECRET_KEY'));
            
            $responseObj = $paystack->transaction->verify(["reference"=>$request->reference]);

            if (!$responseObj) {

                return redirect('/training-program')->with('error', 'Error verifiying payment, please contact support!');
            }

            $responseObj = json_decode(json_encode($responseObj), true);
        
            $response = array('status' => true, 'data' => $responseObj['data']);

            // return response()->json($response, 200);
            // return $response;
            // return $responseObj['data'];
                $amount = Session::get('amount');

                $payment = new Payment;
                $payment->trainings_id = Session::get('trainings_id');
                $payment->paymentType = 'PayStack Payment';
                $payment->paymentRef = Session::get('paymentRef');
                $payment->paymentStatus = $responseObj['data']['status'];
                $payment->paymentAmount = $amount;
                $payment->paymentChannel = $responseObj['data']['channel'];
                $payment->paymentDate = $responseObj['data']['paidAt'];

            if ($responseObj['data']['status'] == 'success' && $responseObj['data']['amount']/100 == $amount) {

                
                //Save payment details in the Transactions table. Save Payment Status, Amount, channel payment date ||IP
                //Create new rows in the Transactions table and add the fileds to the migration table also
                
                $check = Payment::where('paymentRef', $request->reference)->first();
                
                if ($check) {
                    return redirect('/training-program')->with('error', 'Error verifiying payment, please contact support!');
                }

                
                $payment->paid = true;
                $payment->save();

                $training = Trainings::where('id', Session::get('trainings_id'))->first();
                $training->paid = true;
                $training->save();

                $data = $training;

                // send mail to admin on successful submit.
                    try {

                        Mail::to(['Reohobbusiness@gmail.com', 'Info@reohob.com', 'enquiriespvtraining@reohob.com'])->send(new NotifyAdminForTraining($data));  

                        // Notify the trainee also
                        Mail::to($training->email)->send(new NotifyTrainee($data));  

                    } catch (\Throwable $th) {
                        // throw $th;
                    }


                return redirect('/training-program')->with('success', 'Payment  was successfully, please check your mail!');


            } else if($responseObj['data']['status'] == 'success' && $responseObj['data']['amount']/100 !== $amount ) {

                //Create new rows in the Transaction table and add the fileds to the migration table also
                
                $payment->paid = false;
                $payment->save(); 

                    return redirect('/training-program')->with('error', 'Payment verification failed, please contact support!');

                
            } else {

                $payment->paid = false;
                $payment->save();


                    return redirect('/training-program')->with('error', 'Payment verification failed, please contact support!');
                               

            }


        } else {

            
            return redirect('/training-program')->with('error', 'Payment verification failed, please contact support!');

        }
        

           
    }

}
