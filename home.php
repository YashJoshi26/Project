<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
;

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>


    <!-- home Section Starts -->

    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Order Online</span>
                        <h3>Varieties of Salads</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img class="" src="images/salad.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Order Online</span>
                        <h3>Varieties of Pasta</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/pasta.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Order Online</span>
                        <h3>Varieties of Wraps</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/wraps.png" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home Section ends -->

    <!-- main section starts -->
    <div class="m_bg">
        <section class="main">

            <div class="m_row">

                <div class="m_content">
                    <!-- <img src="images/HOW_B_N.png" alt="" class="m_logo"> -->
                    <h3>choose your <span>H</span>OW?</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis non odit nihil, doloremque sunt
                        aut
                        placeat culpa. Adipisci minima, neque necessitatibus incidunt nemo eveniet mollitia quis facere
                        vel
                        consectetur culpa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloremque
                        excepturi enim odit provident accusantium voluptates impedit accusamus dignissimos, veniam quasi
                        inventore nesciunt.</p>

                    <a href="about.html" class="m_btn">&#10140; Learn more</a>
                </div>

                <div class="m_image">
                    <img src="images/main-side.png" class="img1">
                </div>

            </div>

        </section>

    </div>

    <!-- main section ends -->

    <!-- Home product section starts -->
    <!--Rupees sign = &#8377; -->
    <section class="products">

        <h1 class="title">Highsellers</h1>

        <div class="box-container">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
                while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <form action="" method="post" class="box">
                        <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                        <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                        <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                        <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                        <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                        <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                        <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                        <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                        <div class="name">
                            <?= $fetch_products['name']; ?>
                        </div>
                        <div class="flex">
                            <div class="price"><span>&#8377;</span>
                                <?= $fetch_products['price']; ?>
                            </div>
                            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                        </div>
                    </form>
                    <?php
                }
            } else {
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>

        </div>

        <div class="more-btn">
            <a href="menu.php" class="btn">veiw all</a>
        </div>

    </section>

    <!-- Home product section ends -->

    <!-- Food category start -->

    <div class="bg">
        <section class="category">

            <h1 class="title">Food Category</h1>

            <div class="box-container">

                <a href="category.php?category=italian" class="box">
                    <img src="images/main_dishes.jpg" alt="">
                    <h3>Italian Dishes</h3>
                </a>

                <a href="category.php?category=vegan" class="box">
                    <img src="images/vegan.jpg" alt="">
                    <h3>Vegan Dishes</h3>
                </a>

                <a href="category.php?category=milkshakes" class="box">
                    <img src="images/milkshake.jpg" alt="">
                    <h3>Milkshakes</h3>
                </a>

                <a href="category.php?category=refreshments" class="box">
                    <img src="images/refreshment.jpg" alt="">
                    <h3>Refreshments</h3>
                </a>

            </div>

        </section>
    </div>

    <!-- Food category ends -->

    <section class="about">
        <h1>To Look The Best, Eat The Best !</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum fugiat dicta rem nihil, odit culpa debitis
            corrupti dolore iure quo!</p>
        <a href="about.html" class="a_btn">&#10140; Learn more</a>
    </section>


    <!-- footer section -->

    <?php include 'components/footer.php'; ?>


    <!-- Swiper link script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

    <script>
        var swiper = new Swiper(".home-slider", {
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>