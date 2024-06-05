<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
</head>

<body>
<header>
    @include('layouts/header')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('layouts/footer')
</footer>
</body>
</html>
