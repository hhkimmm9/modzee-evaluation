<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Profile;
use App\Http\Resources\Profile as ProfileResource;

class ProfilesController extends Controller
{
    public function index() {
        return response()->file(storage_path('app/public/landscapes.json'));
        // decode?
    }
}
