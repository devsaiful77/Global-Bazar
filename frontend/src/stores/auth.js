import { defineStore } from "pinia";
import atshq from "@/js/setup";

export const useAuth = defineStore("auth", {
    // state: () => {

    // },

    // getters:{

    // },

    /* action */ 
    actions:{
        async login(formData){
            try{
                let res = await atshq.post("user/login", formData);
                if(res.status === 200){
                    console.log(res.data);
                }
            }catch(error){
                console.log(error);
            }
        }
    }

});