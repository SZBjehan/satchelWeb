<template>
    <div class="cart" id="cart">
        <div class="account-name">
            <h2> Account name </h2>
        </div>
        <div class="cart-body">
            <div class="cart-left">
                <div class="cart-items-list">
                    <div class="cart-item-box">
                        <img class="cart-item-img" src="/images/pp.png" alt="">
                        <h4>Item1 Name</h4>
                        <p> Description </p>
                        <p class="price"> price 2.99$ </p>
                        <i class="fas fa-trash"></i>
                    </div>
                    <div class="cart-item-box">
                        <img class="cart-item-img" src="/images/pp.png" alt="">
                        <h4>Item2 Name</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste porro alias repudiandae minima id at dignissimos adipisci debitis voluptas! Deserunt adipisci cupiditate, aspernatur quibusdam delectus harum sed dolores culpa quos. </p>
                        <p class="price"> price 2.99$ </p>
                        <i class="fas fa-trash"></i>
                    </div>
                    <div class="cart-item-box">
                        <img class="cart-item-img" src="/images/pp.png" alt="">
                        <h4>Item4 Name</h4>
                        <p> Description </p>
                        <p class="price"> price 2.99$ </p>
                        <i class="fas fa-trash"></i>
                    </div>
                    <div class="cart-item-box">
                        <img class="cart-item-img" src="/images/pp.png" alt="">
                        <h4>Item7 Name</h4>
                        <p> Description </p>
                        <p class="price"> price 2.99$ </p>
                        <i class="fas fa-trash"></i>
                    </div>
                </div>
            </div>
            <div class="cart-right">
                <div class="cus-details">
                    <h2>Confirm Order</h2>
                    <form action="" >
                        <input type="text" class="order-input" name="username" placeholder="Enter Name" required>
                        <input type="email" class="order-input" name="email" placeholder="Enter Email">
                        <input type="text" class="order-input" name="address" placeholder="Address Details" required>
                        <input type="int" class="order-input" name="contact-number" placeholder="Contact Number" required>
                        <input type="text" class="order-input" name="order-note" placeholder="Special Instruction">
                        <div>
                            <h4> Subtotal: 299.19$ </h4> 
                            <h4> Delivary charge: 0.80$ </h4>
                            <h3> Total:  299.99$ </h3>
                        </div>
                        <input type="submit" value="Place Order" >
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
