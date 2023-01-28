<template>
    <div class="home-screen">
        <Fetch :body="{ hello: 'world' }">
            <template #default="{ data }">
                <div>
                    {{ data.createdAt }}
                </div>
            </template>
        </Fetch>
    </div>
</template>

<script>
import PreLoader from '@/components/Preloader.vue'
import GroupsNotExists from '@/components/GroupsNotExists.vue'
import GroupsExists from '@/components/GroupsExists.vue'
import Fetch from '@/components/Fetch.vue'

export default {
    name: 'HomeScreen',
    components: {
        PreLoader,
        GroupsNotExists,
        GroupsExists,
        Fetch
    },
}
</script>
