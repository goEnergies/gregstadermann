
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('todo-component', require('./components/todo.vue'));
Vue.component('navbar-component', require('./components/navbar.vue'));
Vue.component('card-component', require('./components/card.vue'));
Vue.component('note-component', require('./components/note.vue'));
Vue.component('form-component', require('./components/form.vue'));
Vue.component('checkbox-component', require('./components/checkbox.vue'));

const app = new Vue({
    el: '#app'
});
