<html>

<head>
    <title>@yield('title','WEBTOKO')</title>
</head>

<body>
    <header>
        @include('components.header')
    </header>
    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>