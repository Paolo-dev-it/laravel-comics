<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
</head>

<body>

    @include('partials.header')

    @include('partials.jumbotron')

    @include('partials.main')

    @include('partials.footer')

    @include('partials.socials')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: sans-serif
        }
    </style>
</body>

</html>
