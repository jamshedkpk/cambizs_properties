// Import components 
import Home from "./components/Home.vue"

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
];

const router=createRouter({
history:createWebHistory(),
routes
})
// Export router to main.js file
export default router