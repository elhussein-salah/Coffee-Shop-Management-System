@include('layouts.header')
@include('layouts.navigation')

<body class="font-sans antialiased">


    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
    <!-- End Page Content -->
    @include('layouts.footer')
    @include('layouts.scripts')


</body>

</html>
