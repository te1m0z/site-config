<template>
    <button @click='$router.go(direction)' class='dir-go-btn'>
        <template v-if='dir === "prev"'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d='M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z' />
            </svg>
        </template>
        <template v-if='dir === "next"'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d='M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z' />
            </svg>
        </template>
    </button>
</template>

<script>
export default {
    name: 'GoPrevNextButton',
    props: {
        dir: String
    },
    computed: {
        direction() {
            if (this.dir === 'next') return +1
            if (this.dir === 'prev') return -1
            return -1
        }
    }
}
</script>

<style lang='scss' scoped>
.dir-go-btn {
    display: flex;
    align-items: center;
    width: 30px;
    height: 30px;

    padding: 5px;
    border: 1px solid #b73ac9;
    border-radius: 50%;

    & svg {
        display: inline-block;
        fill:#b73ac9;
    }
}
</style>