@extends('layouts.app')

@section('content')

    <section class="container mx-auto py-8">

        <h3 class="text-2xl">{{ $ticket->movie->title }} <br> {{ $ticket->totalQty }}</h3>
        <span class="float-right">
            <div class="block text-2xl">
                Price: {{ $ticket->price }},-
            </div>
        </span>

        <form class="clear-both pt-6 pb-8 mb-4" action="/tickets/store" method="post">
            @csrf
            <fieldset>
                <legend class="mb-3 text-lg">Bestel een ticket</legend>
                <div class="mb-2">
                    <label class="block text-sm font-bold mb-2" for="amount">Amount</label>
                    <input class="shadow border py-1 px-3 text-gray-700" type="number" name="amount" id="amount" placeholder="0">
                </div>

                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">


                <button class="py-2 px-4 border bg-blue-500 text-white" type="submit">Verzenden</button>
            </fieldset>
        </form>

    </section>
@endsection
