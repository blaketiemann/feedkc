@extends('layouts.app')

@section('content')
    <div class="donate container-fluid justify-content-center">
{{--                <md-empty-state--}}
{{--                    v-if="$store.state.cart.length === 0"--}}
{{--                    md-icon="sentiment_very_satisfied"--}}
{{--                    md-label="Make Some Donations!"--}}
{{--                    md-description="Thank you for making a great community"--}}
{{--                    md-rounded--}}
{{--                ></md-empty-state>--}}

        <foods :foods="{{ App\Food::where('donor_id', auth()->user()->id)->where('status', 'listed')->get() }}" :deleteable="true"></foods>

        <donate-form
            :categories="{{ json_encode(Enum::categories()) }}"
            :quantity-units="{{ json_encode(Enum::quantityUnits()) }}"
        />

    </div>
@endsection
