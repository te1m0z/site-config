<template>
    <header class="app-header">
        <div class="container">
            <h1>{{ title }}</h1>
            <p>Documentation of usage</p>
        </div>
    </header>
</template>

<script>
export default {
    name: 'AppHeader',
    setup() {
        return {
            title: process.env.VUE_APP_PLUGIN_NAME
        }
    }
}
</script>

<style scoped>
.app-header {
    padding: 10px 0;
    background: #8FC93A;
    color: #fff;
}
</style>
