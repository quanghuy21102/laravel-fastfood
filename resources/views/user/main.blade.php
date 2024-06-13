<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.head')
</head>

<body>
<header>
    @include('user.header')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('user.footer')
</footer>
</body>
</html>
