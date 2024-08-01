<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mango Store')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/search_product.js') }}"></script>
</body>

</html>