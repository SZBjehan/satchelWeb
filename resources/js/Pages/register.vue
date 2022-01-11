<template>
    <div>
        <Navbar />
        <div class="register" id="Register">
            <div class="log-box">
                <h2>Sign Up</h2>
                <form action="" >
                    <input type="text" class="login-input" name="username" placeholder="Enter Username" required>
                    <input type="email" class="login-input" name="email" placeholder="Enter Email">
                    <input type="number" class="login-input" name="phone-number" placeholder="Enter Phone Number" required>
                    <input type="password" class="login-input" name="password" placeholder="Enter Password" required>
                    <input type="submit" value="Sign up">
                </form>
            </div>
        </div>

        <Footer />
    </div>
</template>

<script>
import Footer from '../layout/Footer.vue';
import Navbar from '../layout/Navbar.vue';

export default {
  components: { 
      Navbar, 
      Footer
  }
};
</script>
    
