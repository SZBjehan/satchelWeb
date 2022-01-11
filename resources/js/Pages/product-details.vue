<template>
    <div>
        <Navbar />
        <Product />
        <Branding />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Product from "../components/Product.vue";
import Branding from "../components/Branding.vue";
import Footer from "../layout/Footer.vue";

export default {
    components: {
        Navbar,
        Footer,
        Branding,
        Product
        
    }
};
</script>
