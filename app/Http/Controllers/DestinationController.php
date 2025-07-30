<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DestinationController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Destinations=DB::table('destination')->get();
        return view('admin.pages.tables',compact('Destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1'
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('destinations', $imageName, 'public');
        }

        // Insert into database
        DB::table('destination')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('destination.index')->with('success', 'Destination created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination=DB::table('destinations')->where('id',$id)->first();
        return view('Admin.destination.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->image==null){
            $PIC= DB::table('destinations')->where('id',$id)->first();
            $image=$PIC->image;
        }
        else{
            $image=saveFile($request,'image');
        }
        DB::table('destinations')->where('id',$id)->update([
            'name'=>$request->name,
            'image'=>$image,
            'status'=>(request()->status)==null?0:1,
            'cdt'=>now()
        ]);
        return redirect()->route('destination.index');
    }
    public function status(Request $request,string $id)
    {
        $slider=DB::table('destinations')->where('id',$id)->first();
        if($slider->status==1){
        DB::table('destinations')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('destinations')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('destinations')->where('id',$id)->delete();
        return redirect()->route('destination.index');
    }
}
