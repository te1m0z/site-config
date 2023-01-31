import { createRouter, createWebHashHistory } from 'vue-router'
import HomeScreen from '@/screens/HomeScreen.vue'
import NoGroupsScreen from '@/screens/NoGroupsScreen.vue'
import CreateGroupScreen from '@/screens/CreateGroupScreen.vue'

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
        name: 'CreateGroupScreen',
        component: CreateGroupScreen
    }
    // {
    //     path: '/:catchAll(.*)*',
    //     name: "PageNotFound",
    //     component: PageNotFound,
    // },
]

const router = createRouter({
    history: createWebHashHistory(process.env.BASE_URL),
    routes
})

export default router
