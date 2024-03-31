<?php
include 'partials/header.php';

?>


    <!-- booking section starts-->

        <section class="booking">
            <h1 class="heading-title">book your appointment</h1>
                <form action="/p6/book.php" method="post" class="book-form">
                    <div class="flex">
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" placeholder="enter your name" name="name">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="enter your email" name="email">
                        </div>
                        <div class="inputBox">
                            <span>phone :</span>
                            <input type="number" placeholder="enter your number" name="number">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="enter your address" name="address">
                        </div>
                        <div class="inputBox">
                            <span>name the services:</span>
                            <input type="text" placeholder="services" name="services">
                        </div>
                        <div class="inputBox">
                            <span>describe your problem in short:</span>
                            <input type="text" placeholder="describe your problem in short" name="problem">
                        </div>
                        <div class="inputBox">
                            <span>time :</span>
                            <input type="time"  name="time">
                        </div>

                    </div>

                    <input type="submit" value="submit" class="btn" name="send">
                </form>
        </section>
    <!-- booking section ends -->

<!-- footer section starts -->

<?php
include  'partials/footer.php';
?>

<!-- footer se ction ends -->






    <!-- custom js -->
    <script src="/js/script.js"></script>
</body>
</php>