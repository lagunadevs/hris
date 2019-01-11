<template>
    <div class="loader-wrapper centered">
        <div class="loader" :data-theme="theme" :data-placed-on="on">
            <div class="loader__elements">
                <img :src="rootUrl+'/images/lg.dual-ring-loader.gif'">
                <p class="mt-2">{{ text }}...</p>
            </div>

        </div>
    </div>
</template>

<style type="text/css">  
  .centered {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transform: -webkit-translate(-50%, -50%);
    transform: -moz-translate(-50%, -50%);
    transform: -ms-translate(-50%, -50%);
    color: white;
    font-size: 60px;
    z-index: 1;
  }
</style>


<script>
    export default {

        props: ['text', 'theme', 'on'],

        data () {
            return {
                rootUrl : window.location.origin
            }
        }
    }
</script>
