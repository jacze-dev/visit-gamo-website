<?php

namespace App\Http\Controllers;

use App\Models\Arbaminch;
use App\Models\Nature;
use App\Models\ReligiousArea;
use Illuminate\Http\Request;

class religController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('addReligArea');
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
        $formField = $request->validate([
            'name' => 'required|min:3',
             'description'=>'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
             'location'=>'required'
        ]);
    
    
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
        } else {
            return redirect('')->with('error', 'Please select a file to upload.');
        }
    
    
        $fileName = $photo->getClientOriginalName();
    
        $photo->move(public_path('images'), $fileName);
        $formField['image'] = $fileName;
       ReligiousArea::create($formField);
        return  redirect('destinList');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReligiousArea  $religiousArea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relign = ReligiousArea::find($id);
        return view('destnDetail','relign');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReligiousArea  $religiousArea
     * @return \Illuminate\Http\Response
     */
    public function edit(ReligiousArea $religiousArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReligiousArea  $religiousArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReligiousArea $religiousArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReligiousArea  $religiousArea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destin = ReligiousArea::find($id);
        if ($destin) {
            $destin->delete();
            return redirect()->route('goToL')->with('message', 'destination successfully deleted');
        } else {
            return redirect()->route('goToL')->with('message', 'destination not found');
        }
    }
}
