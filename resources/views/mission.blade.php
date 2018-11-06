@extends('layouts.app')

@section('content')
<div class="mission">
    <div class="jumbotron jumbotron-fluid" style="background-color: #00b489">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Your Big Cause</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-6">
                    <div class="card border-dark bg-transparent">
                        <div class="card-body bg-light text-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                                <!-- Identify your business so that you can collect the payments. -->
                                <input type="hidden" name="business"
                                       value="donations@kcparkfriends.org">

                                <!-- Specify a Donate button. -->
                                <input type="hidden" name="cmd" value="_donations">

                                <!-- Specify details about the contribution -->
                                <input type="hidden" name="item_name" value="Friends of the Park">
                                <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
                                <input type="hidden" name="currency_code" value="USD">

                                <!-- Display the payment button. -->
                                <input type="image" name="submit"
                                       src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
                                       alt="Donate">
                                <img alt="" width="1" height="1"
                                     src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                            </form>
                            <i class="fas fa-car-side fa-5x" style="color: darkred; position: absolute; right: 10rem; top: 10.8rem"></i>
                        </div>
                    </div>
                </div>
                <i class="fas fa-flag-checkered fa-5x" style="color: goldenrod; position: absolute; right: 1rem; top: 14.5rem"></i>
            </div>
        </div>
        <div class="milestone">
            <div class="progress progress-striped active">

                <p class="alert alert-success raised"><strong>Raised: $1,031.00</strong></p>

                <p class="alert alert-success goal"><strong>Goal: $4,200.00</strong></p>

                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="team">
        <h1 class="text-center text-black-50">Valueable People</h1>


        <div class="container">
            <div class="row">

                <!--team-1-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/9c27b0/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-1-->

                <!--team-2-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/336699/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important Stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-2-->

                <!--team-3-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/607d8b/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important Stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-3-->

                <!--team-4-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/4caf50/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important Stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-4-->

                <!--team-5-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/e91e63/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important Stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-5-->

                <!--team-6-->
                <div class="col-lg-4">
                    <div class="our-team-main">

                        <div class="team-front">
                            <img src="http://placehold.it/110x110/2196f3/fff?text=Dilip" class="img-fluid" />
                            <h3>Dilip Kevat</h3>
                            <p>Important Stuff</p>
                        </div>

                        <div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
	natoque.
	</span>
                        </div>

                    </div>
                </div>
                <!--team-6-->



            </div>
        </div>
    </div>
    <hr>

    <div class="mentions container-fluid">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Twitter Metions</h6>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <small class="d-block text-right mt-3">
                <a href="#">All updates</a>
            </small>
        </div>
    </div>
</div>
@endsection
