<template>
    <div class="Navbar" id="NavBar">
        <div>
            <nav class="navi-b" id="navbar">
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <a href="/"
                    ><img src="/images/icon.ico" alt="" class="nav-icon"
                /></a>
                <ul class="nav-list">
                    <div class="nav-menu">
                        <li class="nav-li dropdown">
                            <a href="/immigrate">Phones & Tablets</a>
                            <ul class="dropdown-content">
                                <a href="">Apple</a>
                                <a href="">Samsumg</a>
                                <a href="">Xiaomi</a>
                                <a href="">Oneplus</a>
                                <a href="">Amazon</a>
                                <a href="">Motorola</a>
                                <a href="">Vivo</a>
                            </ul>
                        </li>
                        <li class="nav-li dropdown">
                            <a href="/immigrate">Accessories</a>
                            <ul class="dropdown-content">
                                <a href="">Watches</a>
                                <a href="">Headset</a>
                                <a href="">Speakers</a>
                                <a href="">Case</a>
                                <a href="">Screen Protectors</a>
                                <a href="">Gift Cards</a>
                                <a href="">Charger</a>
                            </ul>
                        </li>
                        <li class="nav-li">
                            <a href="/business">MacBook/Laptops</a>
                        </li>
                        <li class="nav-li">
                            <a href="/familys">About Us</a>
                        </li>
                    </div>
                </ul>
            </nav>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        const toggleButton = document.getElementsByClassName(
            "toggle-button"
        )[0];
        const navbarLinks = document.getElementsByClassName("nav-list")[0];

        toggleButton.addEventListener("click", () => {
            navbarLinks.classList.toggle("active");
        });
    }
};
</script>
