import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

const app = createApp(App)

app.use(store)
app.use(router)

console.log(process.env.VUE_APP_PLUGIN_SLUG)

app.mount(`#${process.env.VUE_APP_PLUGIN_SLUG}-app`)
