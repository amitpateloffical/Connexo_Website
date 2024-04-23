<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    // {
    //     $this->validate($request, [
    //      'name' => 'required',
    //      'email' => 'required|email',
    //      'number'=>'required',
    //      'message' => 'required'
    //      ]);
    //      $data = $request->all();
    //      $result = new Contact;
    //       $result->name = $data['name'];
    //     $result->email = $data['email'];
    //     $result->number = $data['number'];
    //     $result->message = $data['message'];

    //       $result->save();
    //     return redirect()->back()->with('msg', 'Thanks for contacting us!');
    // }
    {

        $user = Contact::create([
            'name' => $request['name'],
            'number' => $request['number'],
            'email' => $request['email'],
             'message' => $request['message'],


        ]);

        $email_data = array(
        'name' => $request['name'],
        'email' => $request['email'],
         'number' => $request['number'],
         'message' => $request['message'],
    );
         Mail::send('Front-end.email', $email_data, function ($message) use ($email_data) {
        $message->to('healinternational@actthost.com', $email_data['email'])
            ->subject('Welcome to Heal International')
            ->from($email_data['email']);
    });


        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }

    public function show($id)
    {
        $data=Contact::find($id);
        $data->delete();
        return redirect()->route('allcontact.index')
                        ->with('success','Deleted Successfully');
    }
    public function index()
    {
        $list = Contact::orderBy('id', 'DESC')->get();
        return view('Front-end.contact-us', compact('list'));
    }
}
