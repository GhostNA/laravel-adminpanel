<div class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel">
        @include('layouts.navbars.auth')
        @yield('content')
        {{--@include('layouts.footers.auth')--}}
    </div>
</div>
