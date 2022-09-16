import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router'

import IndexView from '../views/IndexView.vue'
import AboutView from '../views/AboutView.vue'
import BlogView from '../views/BlogView.vue'
import ContactView from '../views/ContactView.vue'
import SinglePostView from '../views/SinglePostView.vue'

const router = createRouter({
  //http://127.0.0.1:5173/#/address
  // history: createWebHashHistory(),
  // 原來的方法
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'index',
        //   component: IndexView,
        // 有s
        components: {
            // 不能用import，會重載入
            main: IndexView,
        },
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      // 靜態載入
      // component: AboutView,
      // 動態載入
    //   component: () => import('../views/AboutView.vue'),
        // 有s
        components: {
            // 不能用import，會重載入
            main: AboutView,
        },
    //   children: [
    //     // {
    //     //   path: '',
    //     //   name: '',
    //     //   component: () => import('../views/AboutView.vue'),

    //     // },
    //     {
    //       path: 'aaa',
    //       name: 'aaa',
    //       component: () => import('../views/about/a.vue'),

    //     },
    //     {
    //       path: 'bbb',
    //       name: 'bbb',
    //       component: () => import('../views/about/b.vue'),

    //     },
    //     {
    //       path: 'ccc',
    //       name: 'ccc',
    //       component: () => import('../views/about/c.vue'),

    //     },
    //   ]
    },
    {
      path: '/contact',
      name: 'contact',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
    //   component: () => import('../views/ContactView.vue'),
        // 有s
        components: {
            // 不能用import，會重載入
            main: ContactView,
        },
    },
    {
        path: '/blog',
        name: 'blog',
        // route level code-splitting
        // this generates a separate chunk (About.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        // component: () => import('../views/BlogView.vue'),
        // 有s
        components: {
            // 不能用import，會重載入
            main: BlogView,
        },
    },
    {
        path: '/single_post',
        name: 'single_post',
        // route level code-splitting
        // this generates a separate chunk (About.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        // component: () => import('../views/BlogView.vue'),
        // 有s
        components: {
            // 不能用import，會重載入
            main: SinglePostView,
        },
    },
    // {
    //   path: '/:id',
    //   name: 'userdata',
    //   component: import('../views/[id].vue'),

    // },
    // https://router.vuejs.org/guide/essentials/dynamic-matching.html#catch-all-404-not-found-route
    // will match everything and put it under `$route.params.pathMatch`
    {
        path: '/:domain(.*)*',
        name: 'NotFound',
        component: import('../views/base/404.vue')
    },
  ]
})

export default router
