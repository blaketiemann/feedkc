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
                    <div class="my-auto w-100 text-white bg-info" style="border-radius:3px">
                        <h5 class="display-2">
                            Ooops, You're not authorized to do that!
                        </h5>
                    </div>
                </div>
            </div>
        </header>

        <footer class="container-fluid">
            <div class="row justify-content-center">
                <div class="card" style="height:500px; margin-top:-100px">
                    <div class="card-body text-left pl-4">
                        <h2>
                            <i class="fa fa-info mr-2"></i> Unauthorized exceptions are commonly triggered due to being signed in as the wrong account type.
                        </h2>
                        <hr>
                        <h4>Donors:</h4>
                        <p>Are allowed to fill out the donation form</p>
                        <hr>
                        <h4>Requesters:</h4>
                        <p>Are allowed to fill out the request food form</p>
                        <hr>
                        <i>
                            Try this form, you're authorized and it's the most common one for your account type!
                        </i>
                        <br>
                        @auth
                        <div class="btn-group btn-group-lg text-center" role="group" aria-label="next">
                            @if(auth()->user()->account === 'donor')
                                <a class="btn btn-outline-info" href="{{ route('donate.create') }}">
                                    Donate
                                </a>
                            @endif
                            @if(auth()->user()->account === 'requester')
                                <a class="btn btn-outline-info" href="{{ route('request.create') }}">
                                    Request Food
                                </a>
                            @endif
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
