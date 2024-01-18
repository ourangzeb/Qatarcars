<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Additional head content goes here -->
</head>
<body>
<div id="app">
    @yield('content')
    <a href="{{ url('/login/facebook') }}">Login with Facebook</a>
    <a href="{{ url('/login/google') }}">Login with Google</a>

</div>

<!-- Additional scripts or footer content goes here -->
</body>
</html>
