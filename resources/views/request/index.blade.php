@extends('layouts.app')

@section('content')

    <div class="request">

    </div>
{{--    <div class="request container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="posts container-fluid col-md-9">--}}
{{--                <div class="row">--}}
{{--                    @foreach($posts as $post)--}}
{{--                        <div class="col-md-4">--}}
{{--                            <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">--}}
{{--                                <div class="card-body d-flex flex-column align-items-start">--}}
{{--                                    <strong class="d-inline-block mb-2 text-primary">Category</strong>--}}
{{--                                    <h3 class="mb-0">--}}
{{--                                        <a class="text-dark" href="#">Product Name</a>--}}
{{--                                    </h3>--}}
{{--                                    <div class="mb-1 text-muted">Exp: Nov 12</div>--}}
{{--                                    <div class="slidecontainer">--}}
{{--                                        <span style="float: right;">Amount: {{ rand(1, 20) }}</span>--}}
{{--                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <img style="object-fit: contain" class="card-img-right flex-auto d-none d-lg-block" src="{{ $postImages[rand(0,3)] }}" alt="Card image cap">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="sidebar">--}}
{{--                    <div class="top text-center">--}}
{{--                        <h3>Items</h3>--}}
{{--                    </div>--}}
{{--                    <div class="items">--}}
{{--                        <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">--}}
{{--                            <div class="card-body d-flex flex-column align-items-start">--}}
{{--                                <strong class="d-inline-block mb-2 text-primary">Chicken</strong>--}}
{{--                                <h3 class="mb-0">--}}
{{--                                    <a class="text-dark" href="#">Selected Food 1</a>--}}
{{--                                </h3>--}}

{{--                            </div>--}}
{{--                            <img style="object-fit: scale-down" class="card-img-right flex-auto d-none d-lg-block" src="data:image/png;base64,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" alt="Card image cap">--}}
{{--                        </div>--}}
{{--                        <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">--}}
{{--                            <div class="card-body d-flex flex-column align-items-start">--}}
{{--                                <strong class="d-inline-block mb-2 text-primary">Beef</strong>--}}
{{--                                <h3 class="mb-0">--}}
{{--                                    <a class="text-dark" href="#">Selected Food 2</a>--}}
{{--                                </h3>--}}

{{--                            </div>--}}
{{--                            <img class="card-img-right flex-auto d-none d-lg-block" src="https://eatingrules.com/wp-content/uploads/2012/10/homemade-beef-jerky-2-128x128.jpg" alt="Card image cap">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="request">--}}
{{--                        <button class="btn btn-success btn-block">Request</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
