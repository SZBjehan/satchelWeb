<template>
    <div>
        <Navbar />
        <PreviousOrders />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Footer from "../layout/Footer.vue";
import PreviousOrders from '../components/PreviousOrders.vue';

export default {
    components: {
        Navbar,
        Footer,
        PreviousOrders   
    }
};
</script>
