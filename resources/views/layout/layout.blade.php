<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard-belitiket')</title>
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Header Section -->
<header class="header">
    <div class="logo">
        <span class="logo-text"><em>belitiket.com</em></span>
    </div>
    <nav class="nav-menu">
        <!-- Menu atau navigasi lain bisa ditambahkan di sini -->
    </nav>
    <div class="avatar">
        <div class="avatar-circle">L</div>
        <div class="dropdown">
            <a href="#">Profile</a>
            <a href="#">Logout</a>
        </div>
    </div>
</header>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer Section -->
<footer>
    <div class="footer-left">
        <p><em>belitiket.com</em></p>
    </div>
    </div>
    <div class="footer-content">
        <p class="copyright">&copy; Copyright Kelompok 6 PBO 2024. All rights reserved.</p>
    </div>
</footer>



</body>
</html>
