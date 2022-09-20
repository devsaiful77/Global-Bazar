import { createRouter, createWebHistory } from 'vue-router'

import Home from "../views/pages/Index.vue"
/* Router Declare */
const routes = [
    /* Public Page Route */
    {
        path: "/", component: Home
    }
    /* Public Page Route */ 
]; 



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

export default router;