<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client= DB::table('clients')->get();
        return view('admin.client.index',compact('client'));
    }


    public function create()
    {
        return view('admin.client.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new Client;
   $result->name = $data['name'];
    if ($request->hasfile('image')) {

      $file = $request->file('image');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->image = $filename;

    }

     $result->save();

        return redirect()->route('ad-client.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $client=Client::get();
        return view('admin.client.index',compact('client'));
    }



    public function update($id,Request $request)
    {
        $result = Client::find($id);
        $data = $request->all();
       $result->name = $data['name'];
    if ($request->hasfile('image')) {

      $file = $request->file('image');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->image = $filename;

    }

     $result->save();

        return redirect()->route('ad-client.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.client.edit',['client'=> $client]);
    }
    public function destroy($id)
    {
        $client=Client::find($id);
        $client->delete();

        return redirect()->route('ad-client.index')
            ->with('success','Deleted successfully');
    }

}
