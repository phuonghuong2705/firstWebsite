import { defineStore } from 'pinia';
import api from '../api/auth';
import { ref, computed } from 'vue';

export const authStore = defineStore('auth', () => {
    const user = ref({})
    
    const doubleCount = computed(() => count.value * 2)
    function increment() {
      count.value++
    }

    async function login (data = {}){
        return new Promise(async (resolve, reject) => {
            try {
                let res = await api.login(data);
                resolve(res.data);
            } catch (error) {
                reject(error);
            }
        });
    }

    async function getUser (){
        return new Promise(async (resolve, reject) => {
            try {
                let res = await api.getUser();
                user.value = res.data;
                resolve(res.data);
            } catch (error) {
                reject(error);
            }
        });
    }
  
    return { user, login, getUser, doubleCount, increment }
  })