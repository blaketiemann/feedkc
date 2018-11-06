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
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Food Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid Food Name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Business</label>
                            <input type="dropdown" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid Business is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Category</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>Chicken</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid category.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Expiration</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>Next Week</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid Expiration
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Amount</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                amount is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Additional Information</label>
                        <input type="email" class="form-control" id="email" placeholder="When going to pick up you have to go here...">
                    </div>


                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Add to Donation Cart</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
