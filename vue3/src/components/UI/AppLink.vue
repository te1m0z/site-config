<template>
    <RouterLink
        :to='$props.to'
        :class='[ "app-link", $props.type ]'
    >
        <slot></slot>
    </RouterLink>
</template>

<script>
export default {
    name: 'AppLink',
    props: {
        to: {
            type: [String, Object],
            required: true
        },
        type: {
            type: String,
            default: 'normal'
        }
    }
}
</script>

<style lang='scss'>
.app-link {
    display: inline-block;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    letter-spacing: 0.05em;

    &:hover {
        background: #b73ac9;
    }

    &.normal {
        background: $blue;
        color: #fff;
        padding: 7px 15px;
        font-size: 16px;
    }

    &.small {
        background: transparent;
        color: $blue;
        padding: 2px 10px;
        font-size: 14px;
        border: 1px solid $blue;
    }

    &.disabled {
        opacity: 0.2;
        border-color: $black;
        color: $black;
        cursor: default;
    }
}
</style>