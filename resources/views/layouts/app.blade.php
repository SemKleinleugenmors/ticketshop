<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="py-4 bg-violet-50 text-3xl">
        <section class="container mx-auto">
            <nav>
                <ul>
                    <li><a class="block pl-4" href="/">Home</a></li>
                </ul>
            </nav>
        </section>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>a
