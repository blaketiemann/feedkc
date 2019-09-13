<div class="md-toolbar-section-start">
    <md-button class="md-icon-button" @click="$data.showDrawer = !$data.showDrawer">
        <md-icon>menu</md-icon>
    </md-button>

    <a class='md-title md-accent' style="text-decoration: none;" href="{{ route('home') }}">
        {{ env('APP_NAME') }}
    </a>
</div>
