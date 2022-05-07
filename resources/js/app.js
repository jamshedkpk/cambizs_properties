// Import vue.js 3
import { createApp } from 'vue'
// Import main component of home
import Home from './components/Home.vue'
import Country from "./components/country/Country_Index.vue"
import State from "./components/state/State_Index.vue"
import City from "./components/city/City_Index.vue"
import Routes from './routes.js'

require('./bootstrap');

// For using vue.js 3 we have to create an instance of it 
const app=createApp({})
// Bind our first component of home to the app instance
app.component('home',Home)
app.component('country',Country)
app.component('state',State)
app.component('city',City)
app.use(Routes)
// Bind our main div of app to the app instance 
app.mount('#app')