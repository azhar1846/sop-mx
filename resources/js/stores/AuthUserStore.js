import { defineStore } from "pinia";
import { ref } from "vue";



export const  useAuthUserStore = defineStore('AuthUserStore', () => {
    const user = ref({
        name : '',
        unit : '',
    });

    const getAuthUser = () => {
        axios.get(route('users.loginUser'))
             .then(response => {
                 user.value = response.data;
             })

     }

    return {user, getAuthUser};
});
