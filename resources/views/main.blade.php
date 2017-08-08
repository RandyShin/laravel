
<!DOCTYPE html>
<html lang="en">

@include('partials._header')

<body>

@include('partials._nav')

<div class="container">

    {{ Auth::check() ? "Logged In" : "Logged Out" }}


    @yield('content')

    @include('partials._footer')

</div> <!-- end of .container -->

@yield('scripts')

</body>
</html>