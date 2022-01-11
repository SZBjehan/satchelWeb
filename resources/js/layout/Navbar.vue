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
                    > <i></i>
                    <img src="/images/logos/logoS.ico" alt="" class="nav-icon"/>
                </a>
                <ul class="nav-list">
                    <div class="nav-menu">
                        <li class="nav-li dropdown">
                            <a href="/immigrate">Brands</a>
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
                            <a href="#">Accessories</a>
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
                            <a href=""> Bag </a>
                        </li>
                        <li class="nav-li dropdown">
                            <a href="#">Make Up</a>
                            <ul class="dropdown-content">
                                <a href="">Lipsticks</a>
                                <a href="">Highlighters</a>
                                <a href="">Blushes & Bronzers</a>
                                <a href="">Foundations</a>
                                <a href="">Primers</a>
                                <a href="">Eye liners</a>
                                <a href="">Powders</a>
                            </ul>
                        </li>
                        <li class="nav-li">
                            <a href="/aboutus">About Us</a>
                        </li>
                    </div>
                </ul>
                <div class="nav-login">
                    <div class="sign-up">
                        <a href="/login"><i class="fas fa-user-plus"></i></a>
                    </div>
                    <div class="shopping-cart">
                        <a href="/checkout"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                    <div class="order-history">
                        <a href="/order-history"><i class="fas fa-history"></i></a>
                    </div>
                </div>
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
