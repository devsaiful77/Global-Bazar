// import axios from 'axios'
// import store from '../store'
// let BASE_URL = ''
// let API_URL = ''
// let APP_URL = ''

// if (location.hostname == 'localhost') {
//     BASE_URL = 'http://localhost:8080/'
//     API_URL = 'http://127.0.0.1:8000/api/v1/'
//     APP_URL = 'http://diqcare1.0.local/'
// } else
// if (location.hostname == 'app.veh.local' || location.hostname == 'www.app.veh.local') {
//     BASE_URL = 'http://app.veh.local/'
//     API_URL = 'http://api.veh.local/api/'
//     APP_URL = 'http://veh.local/'
// } else {
//     BASE_URL = 'http://localhost:8080/'
//     API_URL = 'http://veh-api.diqcare.com:8080/api/'
//     APP_URL = 'http://veh.diqcare.com:8080/'
// }

// const axiosAdmin = axios.create({
//     baseURL: API_URL,
// })
// axiosAdmin.defaults.headers.common['base_URL'] = BASE_URL;
// axiosAdmin.defaults.headers.common['api_URL'] = API_URL;
// axiosAdmin.defaults.headers.common['app_URL'] = APP_URL;
// axiosAdmin.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem("token");

// // axiosAdmin.defaults.withCredentials = true;

// export default axiosAdmin

/**
 * Created by Zura on 12/25/2021.
 */
 import axios from "axios";
//  import store from "@/store";
//  import router from "@/router";
 
 const axiosClient = axios.create({
   baseURL: `http://localhost:8000/api/v1`,
 });
 
//  axiosClient.interceptors.request.use((config) => {
//    config.headers.Authorization = `Bearer ${store.state.user.token}`;
//    return config;
//  });
 
//  axiosClient.interceptors.response.use(
//    (response) => {
//      return response;
//    },
//    (error) => {
//      if (error.response.status === 401) {
//        sessionStorage.removeItem("TOKEN");
//        router.push({ name: "Login" });
//      } else if (error.response.status === 404) {
//        router.push({ name: "NotFound" });
//      }
//      throw error;
//    }
//  );
 
 export default axiosClient;
 