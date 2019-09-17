@extends('layouts.app')

@section('content')
    <div class="profile container-fluid">

        @account('donor')
            <page-title>Your Donation History</page-title>
            <md-empty-state
                v-if="{{ json_encode($foods->isEmpty()) }}"
                md-icon="history"
                md-label="Go Make A Donation!"
                md-description="You have donations have not been requested"
                md-rounded
            ></md-empty-state>

            <foods
                v-if="{{ !json_encode($foods->isEmpty()) }}"
                :foods="{{ $foods }}"
            />
        @endaccount

        @account('requester')
            <page-title>Your Request History</page-title>
            <md-empty-state
                v-if="{{ json_encode($foods->isEmpty()) }}"
                md-icon="history"
                md-label="Make Your First Request"
                md-description="You have not requested any foods yet"
                md-rounded
            ></md-empty-state>

            <foods
                v-if="{{ !json_encode($foods->isEmpty()) }}"
                :foods="{{ $foods }}"
            />
        @endaccount

    </div>
@endsection
