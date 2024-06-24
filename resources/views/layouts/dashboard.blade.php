@include('layouts.partials._head')

    @include('layouts.partials.sidebar')

    @include('layouts.partials.header')

    <main id="main" class="main">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main><!-- End #main -->

    @include('layouts.partials.footer')
    @include('layouts.partials.loader')

@include('layouts.partials._foot')
