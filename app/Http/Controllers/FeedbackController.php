<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cohensive\Embed\Facades\Embed;


class feedbackController extends Controller
{
    public function index()
    {
        $feedback= DB::table('feedback')->get();
        return view('admin.feedback.index',compact('feedback'));
    }


    public function create()
    {
        return view('admin.feedback.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cname' => 'required',
            'video' => 'required',
            'cimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new feedback;
      $result->cname = $data['cname'];
   $result->video = $data['video'];




    if ($request->hasfile('cimage')) {

      $file = $request->file('cimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->cimage = $filename;

    }

     $result->save();

        return redirect()->route('ad-feedback.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $feedback=Feedback::get();
        return view('admin.feedback.index',compact('feedback'));
    }



    public function update($id,Request $request)
    {
        $result = Feedback::find($id);
        $data = $request->all();
       $result->cname = $data['cname'];
   $result->video = $data['video'];



    if ($request->hasfile('cimage')) {

      $file = $request->file('cimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->cimage = $filename;

    }

     $result->save();

        return redirect()->route('ad-feedback.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedback.edit',['feedback' => $feedback]);
    }
    public function destroy($id)
    {
        $feedback=Feedback::find($id);
        $feedback->delete();

        return redirect()->route('ad-feedback.index')
            ->with('success','Deleted successfully');
    }
}
