<template>
    <div class='screen-content' data-index='2'>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'ScreenContent'
}
</script>

<style scoped>
.screen-content {
    margin-top: 30px;
}
</style>