import Layout from "../layouts/layout.vue";
import Home from "../pages/Home/Home.vue";
import ProduceTemplate from "../pages/produce/index.vue";
import Produce from "../pages/produce/produce.vue";
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
                title: 'ProduceTemplate',
                path: 'produce',
                component: ProduceTemplate,
                name: 'ProduceTemplate',
                meta: {
                    title: 'Sản phẩm',
                },
                children: [
                    {
                        title: 'Produce1',
                        path: 'produce1',
                        name: 'Produce1',
                        component: Produce,
                        meta: {
                            title: 'Produce1',
                        },
                    },
                    {
                        title: 'Produce2',
                        path: 'produce2',
                        name: 'Produce2',
                        component: Produce,
                        meta: {
                            title: 'Produce2',
                        },
                    },
                    {
                        title: 'Produce3',
                        path: 'produce3',
                        name: 'Produce3',
                        component: Produce,
                        meta: {
                            title: 'Produce3',
                        },
                    },
                ]
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