require('./bootstrap')

window.Vue = require('vue').default;

require('dynamic-web-vue-components').default.install(Vue)
require('blue-admin-vue-components').default.install(Vue)
require('ecom-vue-components').default.install(Vue)

require('web-page-designer-vue-components').default.install(Vue)
require('jquery.redirect')

window.App = new Vue({
    el: '#app',
})
