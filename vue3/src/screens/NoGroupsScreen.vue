<template>
    <div class='no-groups-screen'>
        <ScreenSectionsAnimation type='bottom'>

            <ScreenHeader>У вас нет ни одной группы</ScreenHeader>

            <ScreenContent>
                <AppLink :to="{ name: 'CreateGroupScreen' }">
                    Создать
                </AppLink>
            </ScreenContent>

        </ScreenSectionsAnimation>
    </div>
</template>

<script>
import AppLink from '@/components/UI/AppLink.vue'
import ScreenHeader from '@/components/layout/ScreenHeader.vue'
import ScreenContent from '@/components/layout/ScreenContent.vue'
import ScreenSectionsAnimation from '@/hoc/ScreenSectionsAnimation.vue'

export default {
    name: 'NoGroupsScreen',
    components: {
        AppLink,
        ScreenHeader,
        ScreenContent,
        ScreenSectionsAnimation
    }
}
</script>

<style scoped lang='scss'>
.no-groups-screen {
    display: flex;
    align-items: center;
    flex-direction: column;

    & .title {
        margin-bottom: 20px;
    }

    & .text {
        display: table;
        margin: 0 auto;
    }
}
</style>