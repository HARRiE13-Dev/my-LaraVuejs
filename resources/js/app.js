

require('./bootstrap');

window.Vue = require('vue').default;
window.Axios = require('axios').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create', require('./components/Create.vue').default);
Vue.component('user', require('./components/User.vue').default);
Vue.component('edit', require('./components/Edit.vue').default);



const app = new Vue({
    el: '#app',
    
});
