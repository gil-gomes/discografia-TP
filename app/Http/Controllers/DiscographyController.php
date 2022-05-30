<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscographyController extends Controller
{
    public function index()
    {
        return view('pages.discography.index');
    }
}
