<template>
    <div :class='[ "input-group", direction ]'>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'InputGroup',
    props: {
        direction: {
            type: String,
            default: 'row'
        }
    }
}
</script>

<style lang='scss'>
.input-group {
    display: flex;
    margin: -10px;

    &.row {
        flex-direction: row;

        & > * {
            margin: 10px;
        }

        //& > * + * {
        //    margin-left: 20px;
        //}
    }

    &.column {
        flex-direction: column;

        //& > * + * {
        //    margin-top: 20px;
        //}
    }
}
</style>