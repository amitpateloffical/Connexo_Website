<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery= DB::table('galleries')->get();
        return view('admin.gallery.index',compact('gallery'));
    }


    public function create()
    {
        return view('admin.gallery.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gname' => 'required',
            'gimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
    $data = $request->all();
    $result = new Gallery;
   $result->gname = $data['gname'];
    if ($request->hasfile('gimage')) {

      $file = $request->file('gimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->gimage = $filename;

    }

     $result->save();

        return redirect()->route('ad-gallery.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $gallery=Gallery::get();
        return view('admin.gallery.index',compact('gallery'));
    }



    public function update($id,Request $request)
    {
        $result = Gallery::find($id);
        $data = $request->all();
       $result->gname = $data['gname'];
    if ($request->hasfile('gimage')) {

      $file = $request->file('gimage');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->gimage = $filename;

    }

     $result->save();

        return redirect()->route('ad-gallery.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',['gallery'=> $gallery]);
    }
    public function destroy($id)
    {
        $gallery=Gallery::find($id);
        $gallery->delete();

        return redirect()->route('ad-gallery.index')
            ->with('success','Deleted successfully');
    }
}
