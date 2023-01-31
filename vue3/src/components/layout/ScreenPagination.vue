<template>
    <div class='screen-pagination' data-index='0'>
        <RouterLink @click.native='goBack' to='/' class='app-link small'>Prev</RouterLink>
        {{ prevRoute }}
        <RouterLink @click.native='goForward' to='/' class='app-link small'>Next</RouterLink>
    </div>
</template>

<script>
import AppLink from '@/components/UI/AppLink.vue'
import { useRoute, useRouter } from 'vue-router'
import { inject } from 'vue'

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
    setup() {
        const router = useRouter()

        return {
            goBack() {
                router.back()
            },
            goForward() {
                router.forward()
            }
        }
    }
}
</script>

<style lang='scss'>
.screen-pagination {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
</style>