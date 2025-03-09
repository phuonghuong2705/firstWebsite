import axios from 'axios';

export default {
    login: (data) => {
       const url = `/api/login`;
       return new Promise((resolve, reject) => {
          axios.post(url, data).then((response) => {
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

    getUser: (data) => {
        const url = `/api/user`;
        return new Promise((resolve, reject) => {
           axios.get(url).then((response) => {
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
}