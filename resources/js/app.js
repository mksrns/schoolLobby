
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'


Vue.use(VueRouter)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 const routes = [
    { path: '/contact', component: require('./components/homepage/ContactComponent.vue') },
    { path: '/calendar', component: require('./components/homepage/CalendarComponent.vue') },
    { path: '/academic', component: require('./components/homepage/AcademicComponent.vue') },
    { path: '/activity', component: require('./components/homepage/ActivityComponent.vue') },
    { path: '/notice', component: require('./components/homepage/NoticeComponent.vue') },
    { path: '/admission', component: require('./components/homepage/AdmissionComponent.vue') },
    { path: '/gallery', component: require('./components/homepage/GalleryComponent.vue') },
    { path: '/event', component: require('./components/homepage/EventComponent.vue') },
    { path: '/achievement', component: require('./components/homepage/AchievementComponent.vue') },
    { path: '/alumini', component: require('./components/homepage/AluminiComponent.vue') },
    { path: '/magazine', component: require('./components/homepage/MagazineComponent.vue') },
    { path: '/home', component: require('./components/homepage/HomeComponent.vue') },
  ]

  const router = new VueRouter({
    mode:'history',
    routes
})
 
 

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('footer-component', require('./components/homepage/FooterComponent.vue'));
Vue.component('sticysocial-component', require('./components/homepage/SticysocialComponent.vue'));
Vue.component('sticycontact-component', require('./components/homepage/SticycontactComponent.vue'));

 
const app = new Vue({
    el: '#app',
    router
});
