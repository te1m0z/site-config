<template>
    <ScreenAnimation type='right'>

        <ScreenHeader>
            <GoPrevNextButton dir='prev' />
        </ScreenHeader>

        <template #second>
            <div class='form-wrapper'>
                <CreateGroupForm />
            </div>
        </template>

    </ScreenAnimation>
</template>

<script>
import ScreenAnimation from '@/hoc/ScreenSectionsAnimation.vue'
import CreateGroupForm from '@/components/forms/CreateGroupForm.vue'
import GoPrevNextButton from '@/components/UI/GoPrevNextButton.vue'
import ScreenHeader from '@/components/layout/ScreenHeader.vue'

export default {
    name: 'CreateGroupView',
    components: {
        GoPrevNextButton,
        CreateGroupForm,
        ScreenAnimation,
        ScreenHeader
    }
}
</script>

<style scoped>
.form-wrapper {
    margin-top: 20px;
}
</style>