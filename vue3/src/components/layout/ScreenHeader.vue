<template>
    <div class='screen-header' :style='{ textAlign: align }' data-index='1'>
        <h1>
            <slot></slot>
        </h1>
    </div>
</template>

<script>
export default {
    name: 'ScreenHeader',
    props: {
        align: {
            type: String,
            default: 'center'
        }
    }
}
</script>

<style lang='scss' scoped>
.screen-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    & h1 {
        font-size: 25px;
        font-weight: 400;
    }
}
</style>