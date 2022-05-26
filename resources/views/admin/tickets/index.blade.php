@extends('layouts.app')

@section('content')
    <section class="container mx-auto py-6">

        <section class="flex justify-between mb-6">
            <h2 class="text-4xl mb-4">Tickets</h2>
            <a href="/admin/ticket/create" class="shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Create Ticket</a>
        </section>

        <table class="table-fixed w-full">
            <thead>
            <tr class="text-left">
                <th>Novie</th>
                <th>Start</th>
                <th>Seats</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($tickets))
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->movie->title }}</td>
                        <td>{{ $ticket->start }}</td>
                        <td>{{ $ticket->totalQty }}</td>
                        <td>
                            <div class="flex">
                                <a href="/admin/tickets/{{ $ticket->id }}" class="inline-block shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Edit</a>
                                <form method="post" action="/admin/tickets/{{ $ticket->id }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="inline-block shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Remove</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </section>
@endsection
