@extends('layouts.skeleton')

@section('app')
    <!--Preload-->
    <div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>

    @include('layouts.components.navbar')

    @yield('content')

    @include('layouts.components.footer')

    <!-- Bact to top -->
    <div class="back-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection
