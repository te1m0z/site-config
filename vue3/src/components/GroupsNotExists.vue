<template>
    <div class="groups-not-exists">
        <p>У вас нет ни одной группы</p>
        <AppButton>Создать</AppButton>
    </div>
</template>

<script>
import AppButton from "@/components/UI/AppButton.vue";

export default {
    name: 'GroupsNotExists',
    components: {
        AppButton
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
