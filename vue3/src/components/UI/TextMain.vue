<template>
    <p class="app-main-text">
        <slot></slot>
    </p>
</template>

<script>
export default {
    name: "TextMain"
}
</script>

<style lang="scss" scoped>
.app-main-text {
    color: #ccc;
}
</style>