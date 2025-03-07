import { createRouter, createWebHistory } from "vue-router";
import client from "./client"
import admin from "./admin"
const routes = [...client];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;