<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
;

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);

    $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->execute([$name, $email, $number, $msg]);

    if ($select_message->rowCount() > 0) {
        $message[] = 'already sent message!';
    } else {

        $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
        $insert_message->execute([$user_id, $name, $email, $number, $msg]);

        $message[] = 'sent message successfully!';

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section starts  -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <!-- contact section -->

    <div class="heading">
        <h3>Our Contact</h3>
        <p><a href="home.html">home </a> <span> / contact</span></p>
    </div>

    <section class="contact">

        <div class="row">

            <div class="image">
                <img src="images/contactUS.png" alt="">
            </div>

            <form action="" method="post">
                <h1>information</h1>
                <h3>get in touch!!</h3>
                <input type="text" name="name" required placeholder="Name" maxlength="50" class="c-box">
                <input type="number" name="number" required placeholder="Number" max="9999999999" min="0" class="c-box"
                    onkeypress="if(this.value.length == 10) return false;">
                <input type="email" name="email" required placeholder="Email" maxlength="50" class="c-box">
                <textarea name="msg" placeholder="Message" required class="c-box" cols="30" rows="10"
                    maxlength="500"></textarea>
                <input type="submit" value="Submit" class="btn" name="send">
            </form>

        </div>

    </section>


    <!--box section start-->

    <section class="bodyofbox">

        <div class="services">
            <div class="card">
                <i class="fa-solid fa-phone"></i>
                <h3>
                    +022. 2810 550 989
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>
                <a class="btn" href="#"> &#10140; Learn More</a>
            </div>

            <div class="card" id="diff">
                <i id="dif" class="fa-solid fa-envelope-open-text"></i>
                <h3>
                    how@helthy.com
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>
                <a class="btn" href="#"> &#10140; Learn More</a>
            </div>

            <div class="card">
                <i class="fa-solid fa-map-location"></i>
                <h3>
                    Charni road, Mumbai, Maharashtra
                </h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nihil aliquid vitae rerum
                    dolorem eos.</p>

                <a class="btn" href="#"></i>&#10140; Learn More</a>
            </div>
        </div>

    </section>

    <!--box section end-->
    <section class="location">
        <div class="containers">

            <div class="col">

                <h1>Our Location</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi maiores voluptates nostrum Lorem
                    ipsum dolor sit amet consectetur, adipisicing elit. Accusamus accusantium nam tenetur dolor
                    nobis harum enim, numquam quod illo quia? </p>

                <a class="a_btn" href="#"> &#10140; Learn More</a>
            </div>
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1682007733975!5m2!1sen!2sin"
                    width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


    <!-- footer section starts  -->
    <?php include 'components/footer.php'; ?>
    <!-- footer section ends -->


    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>