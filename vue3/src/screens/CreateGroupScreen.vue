<template>
    <ScreenAnimation type="right">

        <div class="first">
            назад
            <!--                <router-link :to="$router.options.history.state.back">Назад</router-link>-->
        </div>

        <div class="second">
            CreateGroupView
        </div>

    </ScreenAnimation>
</template>

<script>
import ScreenAnimation from "@/hoc/ScreenAnimation.vue";

export default {
    name: "CreateGroupView",
    components: { ScreenAnimation }
}
</script>

<style scoped>

</style>