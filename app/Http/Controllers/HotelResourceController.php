<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelResourceController extends Controller
{
    public function __invoke(Request $request)
    {
        // Your controller logic here
        $hotels = Hotel::all();
        return view('list.index', compact('hotels'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels= hotel::get();
        return response(view('hotellist', compact('hotels')));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel_store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $images = ['image1', 'image2', 'image3'];
        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                $photo = $request->file($image);
                $fileName = $photo->getClientOriginalName();
                $photo->move(public_path('images'), $fileName);
                $formField[$image] = $fileName;
            }
        }
        hotel::insert([
            'hotels' => $request->hotels,
            'checkin' => ($request->checkin),
            'checkout' =>($request->checkout),
            'NoRooms' => $request->Rooms,
            'image1' => $formField['image1'],
            'image2' => $formField['image2'],
            'image3' => $formField['image3'],
            'detail' => $request->detail,
            'roomdetail' => $request->roomdetail,
            'links' => $request->links,
        ]);

        return redirect()->route('list.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('hotel')->where('id', $id)->delete();
        return redirect()->route('list');
    }
}


