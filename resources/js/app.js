/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('profile-menu-component', require('./components/Layout/ProfileMenu.vue').default);
Vue.component('task-index-component', require('./components/tasks/TaskIndex.vue').default);
Vue.component('task-item-component', require('./components/tasks/TaskItem.vue').default);
Vue.component('add-people-component', require('./components/people/AddPeople.vue').default);
Vue.component('new-person-component', require('./components/people/NewPerson.vue').default);
Vue.component('lead-index-component', require('./components/leads/LeadIndex.vue').default);
Vue.component('lead-column-component', require('./components/leads/LeadColumn.vue').default);
Vue.component('lead-card-component', require('./components/leads/LeadCard.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
