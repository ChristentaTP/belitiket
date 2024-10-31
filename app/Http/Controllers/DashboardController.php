<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Event::with('ticketOptions')->get(); // Mengambil semua event

        return view('dashboard.index', compact('events'));
    }
}
