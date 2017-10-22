<!DOCTYPE html>
<html>
    <head>
    {!! HTML::style('css/front.css') !!}
    </head>
    <body>
        <header>
            <div class="brand">{{"iSTOCK"}}</div>
            <div class="address-bar">{{"Sistem Management Stock"}}</div>  
        </header>
        <main class="container">
            @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
            @endif  
            @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
            @endif
            @yield('main')
        </main>
    </body>
</html>