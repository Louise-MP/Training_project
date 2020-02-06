<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/home_page.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <title>Home page</title>
</head>

<body>

    <!----------------------------- MENU --------------------------->

    <header class="menu">

        <div class="logo">Logo</div>

        <div>

            <?php
  
            echo 'Hi ' . $_SESSION['username'] . ' !';
            
            ?>

        </div>
        <nav>
            <a href="../html/cv.html">Curriculum Vitae</a>
        </nav>

        <a class="sign_out" href="sign_out.php">Sign out</a>
    </header>

    <!------------------------- MAIN SECTION -------------------------->

    <section class="main_section">

        <div class="welcome">
            <h1>Welcome to the Projet 0 website !</h1>
            <p>I created this site to train and show my skills.</p>
            <p></p>
        </div>

    </section>

    <!-------------------------- SECTION 2 ---------------------------->

    <section class="section2">


        <div class="logo_html">
            <img src="../images/html.png" alt="logo html">
        </div>

        <div class="logo_css">
            <img src="../images/css.png" alt="logo css">
        </div>

        <div class="logo_php">
            <img src="../images/php.png" alt="logo php">
        </div>

        <div class="logo_mysql">
            <img src="../images/mysql.png" alt="logo mysql">
        </div>


    </section>


    <!-------------------------- FOOTER ---------------------------->

    <!-- <h2 class="h2_footer">Interested by my profile? Please, contact me :</h2> 


<footer class="footer"> -->


    <!-------------------------- CONTACT SECTION ---------------------------->

    <!-- <section class="contact_section">

<div class="phone_icon">
    <img src="../images/icons/phone.svg" alt="Phone icon">
</div>


<div class="email_icon">
    <img src="../images/icons/mail.svg" alt="Email icon">
</div>


<div class="linkedin_logo">
    <img src="../images/icons/linkedin.svg" alt="Linkedin logo">
</div>


</section>

</footer> -->





</body>

</html>