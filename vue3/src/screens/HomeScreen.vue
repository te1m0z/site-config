<template>
    <div class="home-screen">
        <Fetch :body="{ hello: 'world' }">
            <template #default="{ data }">
                <div v-if='!data.length'>
                    {{ $router.push({ name: 'NoGroupsScreen' }) }}
                </div>
                <div v-else>
                    list exists
                </div>
            </template>
        </Fetch>
    </div>
</template>

<script>
import Fetch from '@/components/Fetch.vue'

export default {
    name: 'HomeScreen',
    components: {
        Fetch
    },
}
</script>
