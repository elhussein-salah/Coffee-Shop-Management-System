<body class="font-sans antialiased">
    @include('layouts.navigation')

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
