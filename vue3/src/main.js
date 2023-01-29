import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import './styles/index.scss'

const app = createApp(App)

// app.use({
//     install() {
//         this.helpers = ''
//     }
// })

app.use(store)
app.use(router)

app.mount(`#${process.env.VUE_APP_PLUGIN_SLUG}-app`)
