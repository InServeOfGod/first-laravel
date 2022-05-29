<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="shortcut icon" href="{{ URL('storage/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <title>Products</title>

    <style>
        .active {
            color: #ff1e1e !important;
        }

        a:hover {
            color: #ff1e1e;
        }

        a:visited {
            color: currentColor;
        }
    </style>
</head>
<body>
    <header>
        @include("layouts/header")
    </header>

    @yield("body")

    <footer>
        @include("layouts/footer")
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
