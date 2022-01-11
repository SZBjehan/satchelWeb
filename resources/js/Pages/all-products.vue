<template>
    <div>
        <Navbar />
        <ProductList />
        <Branding />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import ProductList from "../components/Product-list.vue";
import Branding from "../components/Branding.vue";
import Footer from "../layout/Footer.vue";

export default {
    components: {
        Navbar,
        Footer,
        Branding,
        ProductList
        
    }
};
</script>
