{{--Valid User View--}}
@auth
    <md-toolbar class="md-dense md-accent" md-elevation="0">
        <h3 class="md-title">{{ Auth::user()->name }}</h3>
        <div class="ml-1">({{ Auth::user()->account }})</div>
    </md-toolbar>

    <md-list>
        <md-list-item
            onclick="alert('Need to Implement')"
        >
            <md-icon>person</md-icon>
            <span class="md-list-item-text">Profile</span>
        </md-list-item>

        <md-list-item
            onclick="document.getElementById('logout-form').submit();"
        >
            <md-icon>exit_to_app</md-icon>
            <span class="md-list-item-text">{{ __('Logout') }}</span>
        </md-list-item>
    </md-list>


    {{--Forms to Submit--}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth


{{--Guest View--}}
@guest
    <md-toolbar class="md-dense md-accent" md-elevation="0">
        <h3 class="md-title">Guest</h3>
    </md-toolbar>

    <md-list>
        <md-list-item
            onclick="document.getElementById('login-form').submit();"
        >
            <md-icon>get_app</md-icon>
            <a class="md-list-item-text" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        </md-list-item>

        @if (Route::has('register'))
        <md-list-item
            onclick="document.getElementById('register-form').submit();"
        >
            <md-icon>person_add</md-icon>
            <a class="md-list-item-text" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </md-list-item>
        @endif
    </md-list>

    {{--Forms to Submit--}}
    <form id="login-form" action="{{ route('login') }}" method="GET" style="display: none;">
        @csrf
    </form>
    <form id="register-form" action="{{ route('register') }}" method="GET" style="display: none;">
        @csrf
    </form>
@endguest
