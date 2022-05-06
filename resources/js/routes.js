// Import components 
import Home from "./components/Home.vue"
import Country from "./components/country/Country_Index.vue"

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
];

const router=createRouter({
history:createWebHistory(),
routes
})
// Export router to main.js file
export default router