<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller
{
    public function index()
    {
        $notification= DB::table('notifications')->get();
        return view('admin.notification.index',compact('notification'));
    }


    public function create()
    {
        return view('admin.notification.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ntitle' => 'required',
            'note' => 'required',
                'date' => 'required',
            'nimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new notification;
      $result->ntitle = $data['ntitle'];
   $result->note = $data['note'];
     
    if ($request->hasfile('nimage')) {

      $file = $request->file('nimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->nimage = $filename;

    }
      if ($request->hasfile('date')) {

      $file = $request->file('date');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->date = $filename;

    }

     $result->save();

        return redirect()->route('ad-notification.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $notification=Notification::get();
        return view('admin.notification.index',compact('notification'));
    }



    public function update($id,Request $request)
    {
        $result = Notification::find($id);
         $request->validate([
            'ntitle' => 'required',
            'note' => 'required',
                
            'nimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $data = $request->all();
       $result->ntitle = $data['ntitle'];
   $result->note = $data['note'];
     $result->date = $data['date'];
    if ($request->hasfile('nimage')) {

      $file = $request->file('nimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->nimage = $filename;

    }
        if ($request->hasfile('date')) {

      $file = $request->file('date');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->date = $filename;

    }

     $result->save();

        return redirect()->route('ad-notification.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('admin.notification.edit',['notification' => $notification]);
    }
    public function destroy($id)
    {
        $notification=Notification::find($id);
        $notification->delete();

        return redirect()->route('ad-notification.index')
            ->with('success','Deleted successfully');
    }
}
