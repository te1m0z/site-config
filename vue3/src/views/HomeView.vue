<template>
    <div class="home">
        <Transition name="fade-comp" mode="out-in">
            <component v-if="!isError && !isLoading" :is="firstComponent" />
            <PreLoader v-else-if="isLoading" />
            <p v-else-if="isError && !isLoading">
                {{ errorMessage }}
            </p>
        </Transition>
    </div>
</template>

<script>
import PreLoader from '@/components/Preloader.vue'
import GroupsNotExists from '@/components/GroupsNotExists.vue'
import GroupsExists from "@/components/GroupsExists.vue";

export default {
    name: 'HomeView',
    data() {
        return {
            isLoading: true,
            isError: false,
            errorMessage: null
        }
    },
    components: {
        PreLoader,
        GroupsNotExists,
        GroupsExists
    },
    computed: {
        firstComponent() {
            return this.$store.getters.allGroups.length ? 'GroupsExists' : 'GroupsNotExists'
        }
    },
    mounted() {
        setTimeout( () => {
            this.$store.dispatch( 'updateGroups' )
                .catch( ( response ) => {
                    this.isError = true
                    this.errorMessage = response.errorMessage
                } )
                .finally( () => this.isLoading = false )
        }, 1000 )
    }
}
</script>
