<template>
    <div>
        <Navbar />
        <Cart />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Footer from "../layout/Footer.vue";
import Cart from '../components/Cart.vue';

export default {
    components: {
        Navbar,
        Footer,
        Cart   
    }
};
</script>
