<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $message = "hello world";
        // $name = "john doe";
        // $fruits = ['banana', 'apples', 'oranges'];
        $eventss = Event::get();

        return view('welcome', compact('eventss'));
    }
}
