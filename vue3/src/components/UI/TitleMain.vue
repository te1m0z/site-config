<template>
    <h1 class="app-main-title">
        <slot></slot>
    </h1>
</template>

<script>
export default {
    name: "TitleMain"
}
</script>

<style lang="scss" scoped>
.app-main-title {
    font-size: 25px;
}
</style>