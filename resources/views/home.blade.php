@extends('layouts.app')

@section('content')
    <section class="container mx-auto py-8">
        <h3 class="text-2xl font-bold inline-block leading-7 mb-3">
            Laatste films
        </h3>
        <a href="/movies" class="float-right shadow rounded-lg text-lg px-5 py-2.5 mb-2">Bekijk het hele overzicht</a>

        <section class="flex clear-both">
            @if(!empty($movies))
                @foreach($movies as $movie)
                    <article class="relative w-1/3 bg-white rounded-lg border border-gray-200 shadow-md">
                        <figure class="relative overflow-hidden  h-48">
                            @if(!empty($movie->img_path))
                                <img class="object-cover w-full" src="{{ asset('img/') . '/' .  $movie->img_path  }}" alt="">
                            @endif
                        </figure>


                        <section class="p-5">
                            <h4 class="text-lg font-bold">{{ $movie->title }}</h4>
                            <p>Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </section>

                        <a class="absolute top-0 bottom-0 left-0 right-0" href="/movies/{{ $movie->id }}"></a>
                    </article>
                @endforeach
            @endif

        </section>


    </section>

    <section class="container mx-auto py-8">
        <h3 class="text-lg font-bold inline-block leading-7">Vandaag te zien</h3>

        <section class="bg-slate-100 p-4">

            @if(!empty($tickets))
                <div>
                    @foreach($tickets as $ticket)
                        <dl class="flex items-center bg-slate-200 m-2 p-2" >
                            <div class="w-1/4">
                                <dt class="font-bold mb-1">Time</dt>
                                <dd>{{ $ticket->start }}</dd>
                            </div>
                            <div class="w-1/4">
                                <dt class="font-bold mb-1">Title</dt>
                                <dd>{{ $ticket->movie->title }}</dd>
                            </div>
                            <div class="w-1/4">
                                <dt class="font-bold mb-1">Locatie</dt>
                                <dd>{{ $ticket->movie->country->name }}</dd>
                            </div>

                            <div class="w-1/4">
                                <a class="shadow rounded-lg bg-white text-lg px-5 py-2.5 mr-2 mb-2" href="/tickets/{{ $ticket->id }}">Naar bestellen</a>
                            </div>
                        </dl>
                    @endforeach
                </div>
            @endif

        </section>
    </section>
@endsection
