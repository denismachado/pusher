require('./bootstrap');

window.Vue = require('vue');

import VueAxios from 'vue-axios'
import App from './components/App.vue'

Vue.use(VueAxios, axios)

new Vue({
    render: h => h(App)
}).$mount('#vue')