<template>
    <div>
        <Navbar />
        <div class="login" id="Login">
            <div class="log-box">
                <h2>Sign In</h2>
                <form action="" >
                    <input type="text" class="login-input" name="username" placeholder="Enter Username" required>
                    <input type="password" class="login-input" name="password" placeholder="Enter Password" required>
                    <input type="submit" value="Log in">
                </form>
                <div class="log-box-a">
                    <a href="/register"><div> Create Account </div></a>
                    <a href="/forgot-password"><div> Forgot Password </div></a>
                </div>
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
    
