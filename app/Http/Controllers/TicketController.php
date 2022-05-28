<?php

namespace App\Http\Controllers;

use Mollie\Laravel\Facades\Mollie;

use App\Helpers\Cart;
use App\Models\Movie;
use App\Models\OrderTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    private $cart;

    public function __constructor() {
        $this->cart = new Cart();
    }

    public function create($id) {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.create', compact('ticket'));
    }

    public function store(Request $request) {

        $ticket = Ticket::find($request->input('ticket_id'));
        $totalQty = $request->input('amount') * $ticket->price;

        $payment = Mollie::api()->payments()->create([
          "amount" => [
            "currency" => "EUR",
            "value" => number_format($totalQty, 2, '.', '')  // You must send the correct number of decimals, thus we enforce the use of strings
          ],
          "description" => "Order #" . $ticket->id,
          "redirectUrl" => url("/"),
          "webhookUrl" => route('webhooks.mollie'),
          "metadata" => [
            "order_id" => $ticket->id,
          ],
        ]);

        return redirect($payment->getCheckoutUrl(), 303);

    }

//  public function webhook() {
//
//    if ($this->request->isGet()) {
//
//      $payment = $this->mollieApi->payments->get($id);
//      $orderId = $payment->metadata->order_id;
//
//      if ($payment->isPaid()) {
//
//        $this->view->getView("home/index", ["status" => "is Paid"]);
//
//      } else if ($payment->isFailed()) {
//        $this->view->getView("home/index", ["status" => "is not Paid"]);
//      }
//    }
//  }
}
