<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;

class SiteController extends Controller
{
    public function index() {

        $movies = Movie::all();
        $tickets = Ticket::all();

        return view('home', compact('movies', 'tickets'));
    }
}
