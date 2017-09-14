<!DOCTYPE html>
<html>
<head>
    @include('include.head')
</head>
<body>
<div class="w3-container">

    <header class="row">
        @include('include.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('include.footer')
    </footer>

</div>
</body>
</html>
