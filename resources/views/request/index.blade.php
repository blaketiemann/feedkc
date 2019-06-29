@extends('layouts.app')

@section('content')

    <?php
    $postImages = [
        'https://eatingrules.com/wp-content/uploads/2012/10/homemade-beef-jerky-2-128x128.jpg',
        'http://www.catholicsistas.com/wp-content/uploads/2016/06/03-30578-post/buffalo-chicken-quesadilla-2-128x128.jpg',
        'data:image/jpeg;base64,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',
        'data:image/jpeg;base64,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',
    ];
    $posts = [1,1,1,1,1,1,1,1,1,1,1,1,1,1];
    ?>

    <div class="request container-fluid">
        <div class="row">
            <div class="posts container-fluid col-md-9">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">Category</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Product Name</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Exp: Nov 12</div>
                                    <div class="slidecontainer">
                                        <span style="float: right;">Amount: {{ rand(1, 20) }}</span>
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                </div>
                                <img style="object-fit: contain" class="card-img-right flex-auto d-none d-lg-block" src="{{ $postImages[rand(0,3)] }}" alt="Card image cap">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="top text-center">
                        <h3>Items</h3>
                    </div>
                    <div class="items">
                        <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Chicken</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Selected Food 1</a>
                                </h3>

                            </div>
                            <img style="object-fit: scale-down" class="card-img-right flex-auto d-none d-lg-block" src="data:image/png;base64,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" alt="Card image cap">
                        </div>
                        <div class="card flex-md-row mb-4 shadow bg-white rounded h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Beef</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="#">Selected Food 2</a>
                                </h3>

                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block" src="https://eatingrules.com/wp-content/uploads/2012/10/homemade-beef-jerky-2-128x128.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="request">
                        <button class="btn btn-success btn-block">Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
