<template>
    <AppHeader />
    <div class='container screen-wrapper'>
        <router-view v-slot='{ Component, route }'>
            <Transition
                appear
                :css='false'
                mode='out-in'
                @leave='onLeave'
            >
                <component :is='Component' :key='route.name' />
            </Transition>
        </router-view>
    </div>
</template>

<script>
import gsap from 'gsap'
import AppHeader from '@/components/layout/AppHeader.vue'

export default {
    name: 'App',
    components: {
        AppHeader
    },
    methods: {
        onLeave(el, done) {
            gsap.to(el, {
                y: '+=15',
                opacity: 0,
                onComplete: done
            })
        }
    }
}
</script>


<style lang='scss' scoped>
.screen-wrapper {
    margin-top: 70px;
}
</style>
