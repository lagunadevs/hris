<template>
    <div class="content">
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'about' }">about</router-link> |
            <router-link :to="{ name: 'home' }">Hello World</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {}
</script>