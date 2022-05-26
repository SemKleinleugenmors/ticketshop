@extends('layouts.app')

@section('content')
    <section class="py-8 bg-gray-200">
        <section class="container mx-auto">
            <h2 class="text-2xl">Locaties <span class="block text-sm">Contact en bereikbaarheid</span></h2>
        </section>
    </section>

    <section class="flex container mx-auto py-6">
        <article class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md relative overflow-hidden">
            <img class="object-cover h-48 w-full" src="/dist/6z600k9l-JPG-1567831745.jpg" alt="">
            <section class="p-5">
                <h4 class="text-lg font-bold">Locatie 1</h4>
                <p>Iets over de locatie</p>
            </section>
            <a class="absolute top-0 bottom-0 left-0 right-0" href="#"></a>
        </article>
        <article class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md relative overflow-hidden">
            <img class="object-cover h-48 w-full" src="/dist/1602170794_136052.jpeg" alt="">
            <section class="p-5">
                <h4 class="text-lg font-bold">Locatie 1</h4>
                <p>Iets over de locatie</p>
            </section>
            <a class="absolute top-0 bottom-0 left-0 right-0" href="#"></a>
        </article>
    </section>
@endsection
