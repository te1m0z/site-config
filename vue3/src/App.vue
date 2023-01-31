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
    },
    provide: {
        name: 'hello'
    },
    watch: {
        '$route'(to, from) {
            console.log(to)
            console.log(from)
            // const toDepth = to.path.split('/').length
            // const fromDepth = from.path.split('/').length
            // this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
        }
    }
}
</script>


<style lang='scss' scoped>
.screen-wrapper {
    margin-top: 70px;
}
</style>
