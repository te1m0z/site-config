<template>
    <router-link :to="route" class="app-link">
        <slot></slot>
    </router-link>
</template>

<script>
export default {
    name: "AppLink",
    props: {
        route: String || Object
    }
}
</script>

<style lang="scss" scoped>
.app-link {
    padding: 7px 15px;
    background: #3a54c9;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    letter-spacing: 0.05em;
    transition: 300ms ease;

    &:hover {
        background: #b73ac9;
    }
}
</style>