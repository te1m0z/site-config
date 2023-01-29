<template>
    <label class='form-input-wrap' :style='{ width: w }'>
        <span>{{ label }}</span>
        <input
            :type='type'
            :class='[ "form-input", { "error": false } ]'
        />
    </label>
</template>

<script>
export default {
    name: 'InputText',
    props: {
        type: {
            type: String,
            required: true,
            default: 'text'
        },
        label: {
            type: String,
            required: true
        },
        w: {
            type: String,
            default: '100%'
        }
    }
}
</script>

<style lang='scss' scoped>
.form-input-wrap {
    display: flex;
    flex-flow: column nowrap;

    & span {
        display: inline-block;
        width: fit-content;
        margin-bottom: 6px;
    }
}

.form-input {
    padding: 8px 10px;
    font-size: 20px;
    border-radius: 8px;
    border: 1px solid $green;
}
</style>