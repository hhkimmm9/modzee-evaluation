import Vue from "vue";
import VueRouter from "vue-router";

import Home from "../views/Home.vue";
import ProfileShow from "../views/ProfileShow.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/profile",
        name: "ProfileShow",
        component: ProfileShow,
    },
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes,
});

export default router;
