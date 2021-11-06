<template>
    <div>
        <Navbar />
        <Featured />
        <TopSelling />
        <Promotional />
        <IPhone />
        <Dealership />
        <Branding />
        <Footer />
    </div>
</template>

<script>
import Dealership from "./Dealership.vue";
import Featured from "./Featured.vue";
import IPhone from "./iPhone.vue";
import Navbar from "../layout/Navbar.vue";
import TopSelling from "./TopSelling.vue";
import Footer from "../layout/Footer.vue";
import Branding from "./Branding.vue";
import Promotional from "./Promotional.vue";

export default {
    components: {
        Featured,
        Navbar,
        IPhone,
        Dealership,
        TopSelling,
        Footer,
        Branding,
        Promotional
    }
};
</script>
