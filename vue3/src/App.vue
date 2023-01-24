<template>
    <AppHeader/>
    <div class="container">
        <router-view v-slot="{ Component }">
            <Transition name="fade-comp" mode="out-in">
                <component :is="Component"/>
            </Transition>
        </router-view>
    </div>
</template>

<style lang="scss">
.fade-comp-enter,
.fade-comp-leave {
    &-active {
        transition: 500ms ease;
    }
}

.fade-comp-enter-to,
.fade-comp-leave-from {
    opacity: 1;
    transform: translateY(0);
}

.fade-comp-enter-from {
    opacity: 0;
    transform: translateY(-15px);
}

.fade-comp-leave-to {
    opacity: 0;
    transform: translateY(15px);
}
</style>

<script>
import AppHeader from '@/components/layout/AppHeader.vue'

export default {
    name: 'App',
    components: {
        AppHeader
    }
}
</script>
