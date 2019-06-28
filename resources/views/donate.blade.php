@extends('layouts.app')

@section('content')
<div class="donate">
    <div class="container">
        <div class="text-center">
            <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2>Donation form</h2>
            <p class="lead">Every item of food goes to people in need</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Donation Cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">First item</h6>
                            <small class="text-muted">Beef</small>
                        </div>
                        <span class="text-muted">12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second item</h6>
                            <small class="text-muted">Chicken</small>
                        </div>
                        <span class="text-muted">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Spam</small>
                        </div>
                        <span class="text-muted">5</span>
                    </li>
                </ul>

                <form class="card p-2">
                        <button type="submit" class="btn btn-success">Post Donation</button>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Donation Info</h4>
                @include('forms.donate')
            </div>
        </div>

    </div>
</div>
@endsection
