@extends('layouts.app')

@section('content')
    <div class="donate container-fluid justify-content-center">
        {{--Empty State Check--}}
        {{--        <md-empty-state--}}
        {{--            v-if="$data.cart === []"--}}
        {{--            md-icon="sentiment_very_satisfied"--}}
        {{--            md-label="Make Some Donations!"--}}
        {{--            md-description="Thank you for making a great community"--}}
        {{--            md-rounded--}}
        {{--        ></md-empty-state>--}}

        <foods :foods="{{ App\Food::where('status', 'listed')->get() }}" :requestable="true"></foods>

        {{--Donation Form--}}
        <cart-form

        />
    </div>
@endsection
