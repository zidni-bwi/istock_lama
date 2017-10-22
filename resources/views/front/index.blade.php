@extends('front.template')

@section('main')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                @if(session()->has('error'))
                    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                @endif
                <h2 class="intro-text text-center">{{"Login Bro"}}</h2>
                {!! Form::open(['url' => 'login']) !!}
                    <div class="row">
                        {!! Form::controlBootstrap('text', 6, 'log', $errors, "Username") !!}
                        {!! Form::controlBootstrap('password', 6, 'password', $errors, "Password") !!}
                        {!! Form::submitBootstrap("Login", 'col-lg-12') !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
