<template>
    <div>
        <Navbar />
        <PreviousOrder />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Footer from "../layout/Footer.vue";
import PreviousOrder from '../components/PreviousOrder.vue';

export default {
    components: {
        Navbar,
        Footer,
        PreviousOrder   
    }
};
</script>
