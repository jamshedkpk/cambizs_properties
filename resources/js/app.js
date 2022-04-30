// Import vue.js 3
import { createApp } from 'vue'
// Import main component of home
import Home from './components/Home.vue'

require('./bootstrap');

// For using vue.js 3 we have to create an instance of it 
const app=createApp({})
// Bind our first component of home to the app instance
app.component('home',Home)
// Bind our main div of app to the app instance 
app.mount('#app')