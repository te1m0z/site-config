<template>
    <button class="app-button">
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: "AppButton",
    props: {}
}
</script>

<style scoped>
.app-button {
    padding: 7px 15px;
    background: #8FC93A;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    letter-spacing: 0.05em;
}
</style>