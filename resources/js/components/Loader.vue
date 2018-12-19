<template>
    <div class="loader-wrapper centered">
        <div class="loader" :data-theme="theme" :data-placed-on="on">
            <div class="loader__elements">
                <img :src="rootUrl+'images/lg.dual-ring-loader.gif'">
                <p class="mt-2">{{ text }}...</p>
            </div>

        </div>
    </div>
</template>

<script>
    export default {

        props: ['text', 'theme', 'on'],

        data () {
            return {
                rootUrl : 'https://hris.dev/',
            }
        }
    }
</script>
