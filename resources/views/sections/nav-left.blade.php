<div class="md-toolbar-section-start">
    <md-button class="md-icon-button" @click="$data.showDrawer = !$data.showDrawer">
        <md-icon>menu</md-icon>
    </md-button>

    <a class='md-title' href="{{ route('home') }}">
        {{ env('APP_NAME') }}
    </a>

    @auth
    <md-tabs class="md-primary">
        @account('donor')
            <md-tab id="donate"
                    md-label="Donate"
                    href="{{ route('donate.create') }}"
            ></md-tab>
        @elseaccount('requester')
            <md-tab id="donate"
                    md-label="Request"
                    href="{{ route('request.index') }}"
            ></md-tab>
        @endaccount
    </md-tabs>
    @endauth

</div>
