@extends('layouts.app')

@section('content')
    <div class="donate container-fluid justify-content-center">

        <page-title>Your Listed Donations</page-title>
                <md-empty-state
                    v-if="{{ json_encode($foods->isEmpty()) }}"
                    md-icon="sentiment_very_satisfied"
                    md-label="Make Some Donations!"
                    md-description="You have currently no listed items"
                    md-rounded
                ></md-empty-state>

        <foods
            v-if="{{ !json_encode($foods->isEmpty()) }}"
            :foods="{{ $foods }}"
            :deleteable="true"
        ></foods>

        <donate-form
            :categories="{{ json_encode(Enum::categories()) }}"
            :quantity-units="{{ json_encode(Enum::quantityUnits()) }}"
        />

    </div>
@endsection
