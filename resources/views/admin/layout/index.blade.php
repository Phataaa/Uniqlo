@include('admin.layout.head')
<body class="g-sidenav-show  bg-gray-200">
    @include('admin.layout.navbar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.layout.sidebar')
        <div class="container-fluid py-4">
            @yield('content')
        </div>    
        @include('admin.layout.footer')
    </main>
    
    @include('admin.layout.js')
</body>