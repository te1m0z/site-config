<template>
    <ScreenAnimation type='right'>

        <ScreenPagination />

        <ScreenHeader>Создание группы</ScreenHeader>

        <ScreenContent>
            <div class='form-wrapper'>
                <CreateGroupForm />
            </div>
        </ScreenContent>

    </ScreenAnimation>
</template>

<script>
import ScreenAnimation from '@/hoc/ScreenSectionsAnimation.vue'
import CreateGroupForm from '@/components/forms/CreateGroupForm.vue'
import ScreenHeader from '@/components/layout/ScreenHeader.vue'
import ScreenPagination from '@/components/layout/ScreenPagination.vue'
import ScreenContent from '@/components/layout/ScreenContent.vue'

export default {
    name: 'CreateGroupView',
    components: {
        ScreenContent,
        ScreenPagination,
        CreateGroupForm,
        ScreenAnimation,
        ScreenHeader
    }
}
</script>