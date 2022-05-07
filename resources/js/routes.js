// Import components 
import Home from "./components/Home.vue"
import Country from "./components/country/Country_Index.vue"
import State from "./components/state/State_Index.vue"
import City from "./components/city/City_Index.vue"

// Import 2 packages of route
import {createRouter,createWebHistory} from 'vue-router'

// Defining routes
const routes=
[
{
name:"Home",
path:'/',
component:Home
},
{
name:"Country",
path:'/country',
component:Country
},
{
name:"State",
path:'/state',
component:State
},
{
name:"City",
path:'/city',
component:City
},
];

const router=createRouter({
history:createWebHistory(),
routes
})
// Export router to main.js file
export default router