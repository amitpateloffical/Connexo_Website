<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Support\Facades\DB;  

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table= DB::table('quotes')->get();
        return view('admin.quote.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'company_name' => 'required',
            'email' => 'required',
            // 'phone_no' => 'required',
            'subject' => 'required',
            'message' => 'required'
 
     ]);
         $data = $request->all();
         $form = new Quote;
         $form->subject = $request->subject;
         $form->name = $request->name;
        //  $form->lname = $request->lname;
        //  $form->company_name = $request->company_name;
         $form->email = $request->email;
         $form->phone = $request->phone;
        //  $form->subject = $request->subject;
         $form->message = $request->message;
         
         $form->save();
         return redirect()->back()->with('msg','successfully submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table=Quote::find($id);
        $table ->delete();

        return redirect()->route('getquote.index')
                        ->with('success','Deleted Successfully');
    }
}
