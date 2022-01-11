import Home from './components/Home.vue'
import ProductDetails from './Pages/product-details.vue'
import AllProducts from './Pages/all-products.vue'
import Login from './Pages/login.vue'
import Register from './Pages/register.vue'
import Checkout from './Pages/checkout.vue'
import OrderHistory from './Pages/order-history.vue'
import OldOrder from './Pages/old-order.vue'


export const routes = [{
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'product-details',
        path: '/product-details',
        component: ProductDetails
    },
    {
        name: 'all-products',
        path: '/all-products',
        component: AllProducts
    },
    {
        name: 'checkout',
        path: '/checkout',
        component: Checkout
    },
    {
        name: 'order-history',
        path: '/order-history',
        component: OrderHistory
    },
    {
        name: 'old-order',
        path: '/old-order',
        component: OldOrder
    },

];
