<template>
    <ScreenAnimation type="top" class="groups-not-exists">
        <template #header>
            <TextMain>У вас нет ни одной группы</TextMain>
        </template>
        <template #text>
            <AppLink to="/create-group">Создать</AppLink>
        </template>
    </ScreenAnimation>
</template>

<script>
import AppLink from "@/components/UI/AppLink.vue";
import TextMain from "@/components/UI/TextMain.vue";
import ScreenAnimation from "@/hoc/ScreenAnimation.vue";

export default {
    name: 'GroupsNotExists',
    components: {
        ScreenAnimation,
        AppLink,
        TextMain
    }
}
</script>

<style lang="scss" scoped>
.groups-not-exists {
    padding-top: 50px;
    text-align: center;

    & p {
        margin-bottom: 20px;
    }
}
</style>
