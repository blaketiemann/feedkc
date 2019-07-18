@extends('layouts.app')

@section('content')
    <div class="donate container-fluid justify-content-center">

        {{--Add Donation--}}
        <md-speed-dial class="md-bottom-right">
            <md-speed-dial-target @click='$data.showDialog = !$data.showDialog' class="md-primary">
                <md-icon>add</md-icon>
            </md-speed-dial-target>
        </md-speed-dial>

        {{--Empty State Check--}}
        {{--        <md-empty-state--}}
        {{--            v-if="$data.cart === []"--}}
        {{--            md-icon="sentiment_very_satisfied"--}}
        {{--            md-label="Make Some Donations!"--}}
        {{--            md-description="Thank you for making a great community"--}}
        {{--            md-rounded--}}
        {{--        ></md-empty-state>--}}


        <donating-foods :foods="{{ App\Food::where('donor_id', auth()->user()->id)->where('status', 'pending')->get() }}"/>

        {{--Donation Form--}}
        <donate-form
            :show-form.sync="$data.showDialog"
            :categories="{{ json_encode(Enum::categories()) }}"
            :quantity-units="{{ json_encode(Enum::quantityUnits()) }}"
            @add="$data.cart.push($event)"
        />

    </div>
@endsection
