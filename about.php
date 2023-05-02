<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>

    <!-- about section -->

    <div class="heading">
        <h3>About Us</h3>
        <p><a href="home.php">home </a> <span> / about</span></p>
    </div>


    <section class="a-about">
        <div class="a-row">
            <div class="a-image">
                <img src="images/about.png" alt="">
            </div>
            <div class="a-content">
                <h1>Why choose us?</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos perspiciatis expedita nesciunt
                    consequuntur et rem quibusdam quo fuga. Exercitationem sunt unde animi molestiae odio dicta
                    voluptatem nostrum architecto dolore minima!</p>
                <a href="menu.php" class="a-btn">&#10140; Our Menu</a>
            </div>

        </div>

    </section>


    <section class="bodyofbox">

        <div class="services">
            <div class="a-card">
                <i class="fa-solid fa-list-check"></i>
                <h3>
                    Varied Menus
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>
                <a class="a_btn" href="menu.php"> &#10140; Learn More</a>
            </div>

            <div class="a-card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>
                    Fastest delivery
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>
                <a class="a_btn" href="update_address.php"> &#10140; Learn More</a>
            </div>

            <div class="a-card">
                <i class="fa-solid fa-utensils"></i>
                <h3>
                    delicious food
                </h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>

                <a class="a_btn" href="menu.php"></i>&#10140; Learn More</a>
            </div>
        </div>

    </section>

    <section class="reviews">

        <h1 class="title">What Client Say</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/pic-1.jfif" alt="">
                    <h3>Rachel Green</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-2.jpg" alt="">
                    <h3>Phoebe Buffay</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.jpg" alt="">
                    <h3>Ross Geller</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-4.jfif" alt="">
                    <h3>Monica Geller</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-5.jfif" alt="">
                    <h3>Chandler Bing</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-6.jfif" alt="">
                    <h3>Joey Tribbiani</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <i class="fa-solid"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo exercitationem ullam esse quia
                        iusto in.</p>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>


    <!-- footer section starts  -->
    <?php include 'components/footer.php'; ?>
    <!-- footer section ends -->=


    <!-- custom js file link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>

        var swiper = new Swiper(".reviews-slider", {
            loop: true,
            grabCursor: true,
            spaceBetween: 20,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                550: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

    </script>
</body>

</html>