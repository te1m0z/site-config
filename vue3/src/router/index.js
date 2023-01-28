import { createRouter, createWebHashHistory } from 'vue-router'
import HomeScreen from '@/screens/HomeScreen.vue'
import NoGroupsScreen from '@/screens/NoGroupsScreen.vue'
import CreateGroupView from '@/screens/CreateGroupScreen.vue'

const routes = [
    {
        path: '/',
        name: 'HomeScreen',
        component: HomeScreen
    },
    {
        path: '/no-groups',
        name: 'NoGroupsScreen',
        component: NoGroupsScreen
    },
    {
        path: '/create-group',
        name: 'CreateGroupView',
        component: CreateGroupView
    }
]

const router = createRouter( {
    history: createWebHashHistory( process.env.BASE_URL ),
    routes
} )

export default router
