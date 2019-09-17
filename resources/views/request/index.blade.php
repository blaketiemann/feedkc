@extends('layouts.app')

@section('content')
    <div class="donate container-fluid justify-content-center">
        <page-title>Request Food</page-title>

        <foods :foods="{{ App\Food::where('status', 'listed')->get() }}" :requestable="true"></foods>

        {{--Donation Form--}}
        <cart-form

        />
    </div>
@endsection
