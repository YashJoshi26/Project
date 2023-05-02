<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
    header('location:home.php');
}
;

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


    <div class="heading">
        <h3>Your Profile</h3>
        <p><a href="home.html">home </a> <span> / profile</span></p>
    </div>

    <section class="user-details">

        <div class="user">
            <?php

            ?>
            <img src="images/user_icon.png" alt="">
            <p><i class="fas fa-user"></i><span><span>
                        <?= $fetch_profile['name']; ?>
                    </span></span></p>
            <p><i class="fas fa-phone"></i><span>
                    <?= $fetch_profile['number']; ?>
                </span></p>
            <p><i class="fas fa-envelope"></i><span>
                    <?= $fetch_profile['email']; ?>
                </span></p>
            <a href="update_profile.php" class="btn">update info</a>
            <p class="address"><i class="fas fa-map-marker-alt"></i><span>
                    <?php if ($fetch_profile['address'] == '') {
                        echo 'please enter your address';
                    } else {
                        echo $fetch_profile['address'];
                    } ?>
                </span></p>
            <a href="update_address.php" class="btn">update address</a>
        </div>

    </section>





    <!-- footer section -->

    <?php include 'components/footer.php'; ?>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>

</html>