<!DOCTYPE html>
<html dir="rtl">

<head>

    @include('layouts.front.includes._head')
    <!-- CSS Part End-->
</head>

<body>
    <div class="wrapper-wide">
        @include('layouts.front.includes._header')
        @yield('content')
        <!--Footer Start-->
        @include('layouts.front.includes._footer')
        <!--Footer End-->
        @include('layouts.front.includes._feedback')
    </div>
    <!-- JS Part Start-->
    @include('layouts.front.includes._bottom')
    <!-- JS Part End-->
</body>

</html>
