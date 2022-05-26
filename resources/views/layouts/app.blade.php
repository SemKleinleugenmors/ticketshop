<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('title')
</head>
<body>
    <header class="py-4 bg-violet-50 text-3xl">
        <section class="flex justify-between container mx-auto">
            <nav>
                <ul>
                    <li><a class="block pl-4" href="/">Home</a></li>
                </ul>
            </nav>

            @auth
              <form class="mr-2 mb-2" action="/logout" method="post">
                @csrf
                <button type="submit" class="shadow rounded-lg bg-white text-lg px-5 py-2.5">Logout</button>
              </form>
            @else
                <a href="/login" class="shadow rounded-lg bg-white text-lg px-5 py-2.5">Login</a>
            @endauth
        </section>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>a
