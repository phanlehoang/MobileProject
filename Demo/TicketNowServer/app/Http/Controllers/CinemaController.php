<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    //
    public function index() {
        $data = Cinema::all();
        return response($data);
    }
}
