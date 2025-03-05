import Layout from "../layouts/layout.vue";
import Home from "../pages/admin/home/Home.vue";
// import Produce from "../pages/produce/index.vue";
// import Cart from "../pages/cart/index.vue";
const admin = [
    {   
        path: '/admin',
        component: Layout,
        children: [
            {
                title: 'Home',
                path: 'home',
                name: 'Home',
                component: Home,
                meta: {
                    title: 'Trang chủ',
                },
            },
        ]
    },
]

export default admin;