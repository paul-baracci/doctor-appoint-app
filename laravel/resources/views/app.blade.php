<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Paul Baracci">
    <title>Title</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main role="main" id="app">
        @include('header')
        <alert>Alert</alert>
        @yield('content')
        @include('footer')
    </main>
<script src="../node_modules/jquery/dist/jquery.slim.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
