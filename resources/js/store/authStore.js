import { defineStore } from 'pinia';
import api from '../api/auth';

export const authStore = defineStore('auth', () => {
    const user = ref({})
    
    const doubleCount = computed(() => count.value * 2)
    function increment() {
      count.value++
    }
  
    return { count, name, doubleCount, increment }
  })