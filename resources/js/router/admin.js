import Admin from "../layouts/admin.vue"
import User from "../pages/admin/users/index.vue"
const admin = [
    {
        path: '/admin',
        component: Admin,
        name: 'admin',
        children: [
            {
                path: 'user',
                name: 'admin-user',
                component: User,
                meta: {
                    title: 'Admin',
                },
            }
        ]
    }
]

export default admin;