<template>
    <div>
        <!--    Add Donation    -->
        <md-speed-dial v-if="this.route === 'donate'" class="md-bottom-right">
            <md-speed-dial-target @click='$store.dispatch("toggleDialog")' class="md-accent">
                <md-icon>add</md-icon>
            </md-speed-dial-target>
        </md-speed-dial>

        <!--    Request Donation   -->
        <md-speed-dial v-if="this.route === 'request'" class="md-bottom-right md-accent">
            <md-speed-dial-target @click='$store.dispatch("toggleCart")' class="md-accent">
                <md-icon>shopping_cart</md-icon>
            </md-speed-dial-target>
        </md-speed-dial>
    </div>
</template>

<script>
    export default {
        name: 'SpeedDial',
        props: ['route'],
    }
</script>
