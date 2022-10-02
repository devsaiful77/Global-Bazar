import { createRouter, createWebHistory } from 'vue-router'

import Home from "../views/pages/Index.vue"
import Shop from "../views/pages/Shop.vue"
import SingleProduct from "../views/pages/SingleProduct.vue"
import SellerList from "../views/pages/seller/List.vue"
import SellerStore from "@/views/pages/seller/Create.vue"
import Login from "@/views/auth/Login.vue"
import Register from "@/views/auth/Register.vue"

/* Authentication */
import UserProfile from "@/views/user/UserProfile.vue"
import Wishlist from "@/views/user/Wishlist.vue"
import UserOrder from "@/views/user/UserOrder.vue"
 


/* Router Declare */
const routes = [
    /* Public Page Route */
    { 
      path: "/", 
      component: Home ,
      meta: { title: 'Home' }
    },

    { 
      path: "/shop", 
      component: Shop ,
      name: 'shop.page',
      meta: { title: 'Shop' }
    },

    { 
      path: "/product-details", 
      component: SingleProduct ,
      name: 'product.details',
      meta: { title: 'Product Details' }
    },
   
    { 
      path: "/seller/list", 
      component: SellerList ,
      name: 'seller.page',
      meta: { title: 'Seller' }
    },

    { 
      path: "/seller/store", 
      component: SellerStore ,
      name: 'seller.store',
      meta: { title: 'Seller Create ' }
    },

    { 
      path: "/auth/login",
      name:'user.login', 
      component: Login ,
      meta: { title: 'Login' }
    },

    { path: "/auth/register", 
      name:'user.register', 
      component: Register ,
      meta: { title: 'Register' }
    },
    /* Public Page Route */ 
    /* Authentication Page Route */
    { path: "/user/profile", 
      name:'user.profile', 
      component: UserProfile ,
      meta: { title: 'User Profile' }
    },

    { path: "/user/wishlist", 
      name:'wishlist.page', 
      component: Wishlist ,
      meta: { title: 'Wishlist' }
    },

    { path: "/user/order-list", 
      name:'user.order', 
      component: UserOrder ,
      meta: { title: 'Order List' }
    },


]; 



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

/* Dynamic Title */ 
const default_title = "404";
router.beforeEach((to, from, next) => {
  document.title = to.meta.title || default_title;
  next();
});

export default router;