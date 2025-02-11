import Layout from "../layouts/layout.vue";
import Home from "../pages/Home/Home.vue";
import Produce from "../pages/produce/index.vue";
import Cart from "../pages/cart/index.vue";
const client = [
    {   
        path: '/',
        component: Layout,
        children: [
            {
                title: 'Home',
                path: '',
                name: 'Home',
                component: Home,
                meta: {
                    title: 'Trang chủ',
                },
            },
            {   
                title: 'Produce',
                path: 'produce',
                component: Produce,
                name: 'Produce',
                meta: {
                    title: 'Sản phẩm',
                },
            },
            {   
                title: 'Cart',
                path: 'cart',
                component: Cart,
                name: 'Cart',
                meta: {
                    title: 'Giỏ hàng',
                },
            },
        ]
    },
]

export default client;