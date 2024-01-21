<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #080C3D;
            color: #ffffff;
        }

        .navbar {
            background-color: #080C3D;
        }

        .navbar-brand {
            color: #ffffff;
        }

        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }
    </style>
    <title>Your Laravel App</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#">
        <img src="path/to/your/logo.png" alt="Logo">
        Your App Name
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/signup') }}">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login/facebook') }}">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login/google') }}">Signin</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Your content goes here -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
