import { createRouter, createWebHistory } from "vue-router";
import Home from "./components/views/Home.vue";
import About from "./components/About.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/about", component: About },
];

const history = createWebHistory();

const router = createRouter({
  history,
  routes,
});

export default router;