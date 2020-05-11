import VueRouter from 'vue-router'

let routes = [
	{
      path: '/',
      component: () => import('./components/pages/Index'),
      children: [
        {
          name: 'Login',
          path: '',
          component: () => import('./components/auth/Login'),
        },
        {
          name: 'Login',
          path: 'login',
          component: () => import('./components/auth/Login'),
        },
        {
          name: 'Register',
          path: 'register',
          component: () => import('./components/auth/Register'),
        },
        {
          name: 'Lock',
          path: 'lock',
          component: () => import('./components/auth/Lock'),
        },
        {
          name: 'Pricing',
          path: 'pricing',
          component: () => import('./components/pages/Pricing'),
        },
      ],
    },
];

const router = new VueRouter({
    base: '/',
    mode: 'history',
    routes,
});

export default router;