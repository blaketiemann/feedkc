@extends('layouts.app')

@section('content')
<div class="home">
{{--    <md-empty-state--}}
{{--        md-icon="home"--}}
{{--        md-label="Welcome KC"--}}
{{--        md-description="Our mission is build a community of nice people"--}}
{{--        md-rounded--}}
{{--    ></md-empty-state>--}}
    <img src="/images/home.gif" alt="Home Image">

    <md-card class="md-centered home-card">
        <md-card-content class="justify-content-between">
            <md-button href="{{ route('login')  }}">Login</md-button>
            <md-button href="{{ route('register') }}">Register</md-button>
        </md-card-content>
    </md-card>
</div>
@endsection
