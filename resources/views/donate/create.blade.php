@extends('layouts.app')

@section('content')
    <div class="donate container-fluid">

        {{--Add Donation--}}
        <md-speed-dial class="md-bottom-right">
            <md-speed-dial-target @click='$data.showDialog = true' class="md-primary">
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


        {{--Donation Form--}}
        <donate-form
            :show-form="true"
        >
        </donate-form>

    </div>
@endsection
