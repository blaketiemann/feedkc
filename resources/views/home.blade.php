@extends('layouts.app')

@section('content')
<div class="home">
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex text-center h-100">
                <div class="my-auto w-100 text-white">
                    <h1 class="display-1">Feed KC</h1>
                    <h2>Slogan Here</h2>
                </div>
            </div>
        </div>
    </header>

    <footer class="container-fluid">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-capitalize">What's Next</h5>
{{--                    <example-component @inline>--}}
{{--                        @include('components.example-component')--}}
{{--                    </example-component>--}}
                    <br>
                    <br>
                    <div class="well">
                        <div class="btn-group btn-group-lg" role="group" aria-label="next">
                            <a class="btn btn-outline-info" href="{{ route('donate.create') }}">
                                Donate
                            </a>
                            <a class="btn btn-outline-info" href="{{ route('request.create') }}">Request Food</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
