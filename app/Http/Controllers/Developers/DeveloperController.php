<?php

namespace App\Http\Controllers\Developers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('developers.index');
    }
}
