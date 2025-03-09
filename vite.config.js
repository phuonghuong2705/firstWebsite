import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
 
export default defineConfig({
    plugins: [
        laravel(['resources/js/app.js']),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    // define: {
    //     'process.env': {
    //         shopApi: process.env.SHOP_API_DOMAIN,
    //     }
    // },
    server: {
        host: 'localhost',
        proxy: {
            '/api': {
                target: 'http://localhost:8386',
                changeOrigin: true,
                secure: false,
                withCredentials: true, // Quan trọng: gửi cookie
            },
        },
    },
});
