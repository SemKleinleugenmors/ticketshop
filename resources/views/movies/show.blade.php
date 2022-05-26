@extends('layouts.app')

@section('content')

    <style>
        .before-background::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image:
                linear-gradient(to bottom, rgba(255, 255, 255, .2), rgba(255, 255, 255, .2)),
                url({{ asset('img/') . '/' .  $movie->img_path  }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            z-index: -1;
        }

    </style>

    @if(!empty($movie))

        <section class="container mx-auto">
            <section class="relative flex items-center h-96 before-background">
                <h2 class="px-4 text-black text-8xl">{{ $movie->title }}</h2>
            </section>
            <section class="flex justify-between py-6">
                <p>Hier komen nog meer opties.. </p>
                <a href="#" class="shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Order tickets</a>
            </section>
            <section class="flex py-8">
                <article class="w-3/5">
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->description }}</p>
                </article>

                <article class="w-2/5">
                    <div class="inline-block w-full">
                        <p><strong>Director</strong></p>
                        <p>{{ $movie->director }}</p>
                    </div>
                    <div class="inline-block w-full">
                        <p><strong>Country</strong></p>
                        <p>{{ $movie->country->name }}</p>
                    </div>
                    <div class="inline-block w-full">
                        <p><strong>Year</strong></p>
                        <p>{{ $movie->year }}</p>
                    </div>
                    <div class="inline-block w-full">
                        <p><strong>Duration</strong></p>
                        <p>{{ $movie->duration }}</p>
                    </div>
                    <div class="inline-block w-full">
                        <p><strong>Subtitles</strong></p>
                        <p>{{ $movie->subtitle->name }}</p>
                    </div>
                </article>
            </section>
        </section>
    @endif
@endsection
