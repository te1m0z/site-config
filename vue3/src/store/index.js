import { createStore } from 'vuex'

export default createStore({
    state: {
        groups: [],
        settings: []
    },
    mutations: {},
    actions: {
        async updateGroups(state) {

        },
        addGroup(state, newGroup) {

        }
    },
    getters: {
        allGroups(state) {
            return state.groups
        }
    }
})
