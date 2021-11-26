<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    // 1. include the json file in the response.
    // public function index() {
    //     return response()->file(storage_path('app/public/landscapes.json'));
    // }

    // 2. create sample data and store them in the DB first,
    // then find the data here and send it to the client.
    public function index()
    {
        return Profile::all();
    }

    public function show($id)
    {
        $target = Profile::find($id);
        // dd($target->albums);
        return $target;
    }
}
