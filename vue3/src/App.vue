<template>
    <AppHeader />
    <div class='container'>
        <router-view v-slot='{ Component, route }'>
            <component :is='Component' :key='route.name' />
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
    }
}
</script>
