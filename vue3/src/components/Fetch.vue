<template>
    <div class='fetch'>

        <slot v-if='data' :data='data' />

        <PreLoader v-if='loading' />

        <p v-if='error' class='error'>
            {{ error.message }}
        </p>

    </div>
</template>

<script>
import PreLoader from '@/components/Preloader.vue'
import { useFetch } from '@/hooks/useFetch.js'

export default {
    name: 'Fetch',
    components: { PreLoader },
    props: {
        body: Object
    },
    setup({ body }) {
        console.log(body)
        const coreAPI = useFetch(body)

        return {
            ...coreAPI
        }
    }
}
</script>
