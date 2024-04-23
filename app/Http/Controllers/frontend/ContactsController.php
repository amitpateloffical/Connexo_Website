<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class ContactsController extends Controller

{
        public function expert(Request $request){
      $request->validate([
    'name' => 'required|max:255',
    'company_name' => 'required',
    'number' => 'required|min:10|max:12',
    'email' =>'required|email:rfc,dns',
    'enquiry' => 'required|max:255',
    'tnc' => 'required'
]);
    
    if(!preg_match('/(.*)@gmail|yahoo\.com/i', $request->get('email'))){
          Mail::send('email', [
                'name' => $request->get('name'),
                'company_name' =>$request->get('company_name')
                ],
                function ($message) use ($request) {
                        $message->from($request->get('email'));
                        $message->to('priya@venturingdigitally.com', 'Priya')
                                ->subject('Your Website Talk to expert Form');
        });
        toastr()->success('Success Message');

        return back();
    }
    else{
               toastr()->warning('Only business email in accepted!!');
               return back();
    }

      
         

    }
     public function career(Request $request){
      $request->validate([
    'name' => 'required|max:255',
    
    'number' => 'required|min:10|max:12',
    'email' =>'required|email:rfc,dns',
  
]);
    
    if(!preg_match('/(.*)@gmail|yahoo\.com/i', $request->get('email'))){
          Mail::send('email', [
                'name' => $request->get('name'),
               
                ],
                function ($message) use ($request) {
                        $message->from($request->get('email'));
                        $message->to('priya@venturingdigitally.com', 'Priya')
                                ->subject('Your Website Career Form');
        });
        toastr()->success('Success Message');

        return back();
    }
    else{
               toastr()->warning('Only business email in accepted!!');
               return back();
    }

      
         

    }

}
