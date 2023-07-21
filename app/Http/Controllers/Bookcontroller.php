<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function book($id)
    {
        // Connect to the database
        $connection = DB::connection();

        // Retrieve the information about the hotel
        $hotel = $connection->table('_hotel')->where('id', $id)->first();
        return view('book', ['hotel' => $hotel]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    
}
