<template>
    <div class='screen-pagination' data-index='0'>
<!--        <RouterLink :to='$router.go(-1)' class='app-link small'>Prev</RouterLink>-->
<!--        <RouterLink :to='$router.go(+1)' class='app-link small'>Next</RouterLink>-->
    </div>
</template>

<script>
import AppLink from '@/components/UI/AppLink.vue'
import { useRouter } from 'vue-router'

export default {
    name: 'ScreenPagination',
    data() {
        return {
            prevRoute: null,
            nextRoute: null
        }
    },
    components: {
        AppLink
    },
    methods: {
        goBack() {
            this.$router.go(-1)
        },
        goForward() {
            this.$router.go(+1)
        }
    },
    setup() {
        const router = useRouter()
        console.log(router.currentRoute.)
    }
}
</script>

<style lang='scss'>
.screen-pagination {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 20px;
}
</style>