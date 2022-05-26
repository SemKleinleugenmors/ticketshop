@extends('layouts.app')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="shadow text-orange-700 p-3" role="alert">
                <p class="font-bold">Be Warned</p>
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif

    <section class="container mx-auto h-96">
        <div class="flex content-center justify-center">
            <form action="{{ (empty($movie) ? '/admin/movies' : '/admin/movies/' . $movie->id) }} " method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">


                @if(isset($movie->id)) {{ method_field('PATCH')}} @else {{ method_field('POST')}} @endif
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input name="title" value="{{ (!empty($movie) ? $movie->title : 'Title') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="duration">
                        Duration
                    </label>
                    <input name="duration" type="number" value={{ (!empty($movie) ? $movie->duration : 120) }} class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="duration" placeholder="Duration">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="duration">
                        Director
                    </label>
                    <input name="director" value="{{ (!empty($movie) ? $movie->director : 'Billy Da Franco') }}" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="director" type="director" placeholder="Director">
                </div>
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <select name="country" class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                            @if(!empty($countries))

                                @foreach($countries as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <select name="subtitle" class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                            @if(!empty($subtitles))
                                @foreach($subtitles as $subtitle)
                                    <option value="{{ $subtitle->id }}">{{ $subtitle->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>


                <div class="my-5">
                    <input type="file" id="myFile" name="image">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea name="description" cols="30" rows="10" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">{{ (!empty($movie) ? $movie->description : 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.') }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="year">
                        1984
                    </label>
                    <input value="1984" name="year" type="number" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="fa.. 1984">
                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    {{ (!empty($movie) ? 'Update' : 'Create') }}
                </button>
            </form>
        </div>
    </section>
@endsection
