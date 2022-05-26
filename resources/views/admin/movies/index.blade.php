@extends('layouts.app')

@section('content')
    <section class="container mx-auto py-6">

        <section class="flex justify-between mb-6">
            <h2 class="text-4xl mb-4">Movies</h2>
            <a href="/admin/movies/create" class="shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Create Movie</a>
        </section>

        <table class="table-fixed w-full">
            <thead>
            <tr class="text-left">
                <th>Title</th>
                <th>Duratioon</th>
                <th>Director</th>
                <th>Year</th>
                <th>language</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($movies))
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->duration }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->year }}</td>
                        <td>{{ $movie->country->name }}</td>
                        <td>
                            <div class="flex">
                            <a href="/admin/movies/{{ $movie->id }}" class="inline-block shadow text-blue-500 rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 text-white">Edit</a>
                            <form method="post" action="/movies/{{ $movie->id }}">
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
