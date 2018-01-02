import Vue from 'vue'
import Router from 'vue-router'
import MainPage from '@/components/MainPage'
import About from '@/components/About'
import SignUp from '@/components/SignUp'
import SignIn from '@/components/SignIn'

Vue.use(Router)

export default new Router({
  routes: [
      {
         path: '/',
         name: 'MainPage',
         component: MainPage
      },
      {
        	path: '/about',
        	name: 'About',
        	component: About
      },
      {
          path: '/signup',
          name: 'Signup',
          component: SignUp
      },
      {
    	    path: '/signin',
    	    name: 'Signin',
    	    component: SignIn
      }
  ]
})
