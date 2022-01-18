<template>
    <div>
        <Navbar />
        <Featured />
        <TopSelling />
        <CountryBased />
        <Dealership />
        <Branding />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../layout/Navbar.vue";
import Featured from "./Featured.vue";
import TopSelling from "./TopSelling.vue";
import CountryBased from './CountryBased.vue';
import Dealership from "./Dealership.vue";
import Branding from "./Branding.vue";
import Promotional from "./Promotional.vue";
import Footer from "../layout/Footer.vue";

export default {
    components: {
        Featured,
        Navbar,
        Dealership,
        TopSelling,
        Footer,
        Branding,
        Promotional,
        CountryBased
    }
};
</script>
