import { createStore } from 'vuex'
import { useFetch } from '@/hooks/useFetch'

export default createStore( {
    state: {
        groups: [],
        settings: []
    },
    mutations: {
        updateGroups( state, groups ) {
            state.groups = groups
        }
    },
    actions: {
        async updateGroups( state ) {
            const result = await useFetch( {
                action: 'get_all_groups'
            } )
            if (result.data && result.data.success) {
                state.commit( 'updateGroups', result.data.groups )
                return Promise.resolve( result.data.groups )
            }
            return Promise.reject( result )
        }
    },
    getters: {
        allGroups( state ) {
            return state.groups
        }
    }
} )
