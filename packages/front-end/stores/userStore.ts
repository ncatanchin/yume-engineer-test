import { defineStore } from 'pinia'
import type { User } from '~/models/user'

export const useUserStore = defineStore('user', () => {
  const data = ref<User | null>()
  const user = computed(()=>data.value);
  function setUser(u: User | null) {
    data.value = u;
  }
  return { user, setUser }
})