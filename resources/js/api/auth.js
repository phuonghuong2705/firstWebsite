import axios from 'axios';

export default {
    login: (data) => {
        const url = `/api/login`;
        return new Promise((resolve, reject) => {
            axios.post(url, data, {
                withCredentials: true,
        }).then((response) => {
            if (response.data.status) {
                resolve(response.data);
            } else {
                reject(response.data);
            }
          }).catch((response) => {
             reject(response);
          })
       });
    },

    getUser: () => {
        const url = `/api/user`;
        return new Promise((resolve, reject) => {
            axios.get(url, {
                withCredentials: true,
        }).then((response) => {
            if (response.data.status) {
                    resolve(response.data);
            } else {
                    reject(response.data);
            }
           }).catch((response) => {
              reject(response);
           })
        });
        // axios.get('/sanctum/csrf-cookie', { withCredentials: true }).then(() => {
        //     axios.get('/api/user', { withCredentials: true })
        //         .then(response => console.log(response.data))
        //         .catch(error => console.error(error));
        // });
    },
}