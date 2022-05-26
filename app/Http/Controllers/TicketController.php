<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\OrderTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create($id) {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.create', compact('ticket'));
    }

    public function store(Request $request) {

        OrderTicket::create([
            'qty' => $request->input('amount'),
            'ticket_id' => $request->input('ticket_id')
        ]);

        $ticket = Ticket::find($request->input('ticket_id'));
        $ticket->totalQty = $ticket->totalQty - $request->input('amount');
        $ticket->save();


        return redirect('/admin/tickets');

    }
}
