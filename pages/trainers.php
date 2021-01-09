<!DOCTYPE html>
<html lang="en">
<?php include_once('templates/header.php'); ?>
<body>
    <!---Navbar Section-->
    <nav class="navbar">
        <a href="index.php" class="navbar__logo">MAXIMA FITNESS</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="navbar__menu">
            <a href="../index.php" class="navbar__link">Home</a>
            <a href="services.php" class="navbar__link">Services</a>
            <a href="plans.php" class="navbar__link">Plans</a>
            <a href="trainers.php" class="navbar__link">Trainers</a>
        </div>
    </nav>
   <!-- Team Section -->
   <div class="team">
    <div class="team__wrapper">
        <div class="team__text animate-team">
            <p class="topline">Private Coaching</p>
            <h1>Meet Our Trainer</h1>
            <p class="team__desc">
                All our Personal trainers have over 30 years of experience
                combined. 
                Each Trainer specializes in strength and mobility workouts.
            </p>
        </div>
        <div class="team__text animate-team">
            <p class="topline">Free Trial</p>
            <h1>7 Day Trial</h1>
            <p class="team__desc">
                You can work with each trainer for up to 7 
                days for free in order to
                see if they are a good fit for your goals. 
            </p>
        </div>
        <div class="team__card animate-team">
            <p>Robin</p>
            <img src="../assets/images/person-1.jpg" alt="person" class="team__img">
        </div>
        <div class="team__card animate-team">
            <p>Michael</p>
            <img src="../assets/images/person-2.jpg" alt="person" class="team__img">
        </div>
        <div class="team__card animate-team">
            <p>Johan</p>
            <img src="../assets/images/person-3.jpg" alt="person" class="team__img">
        </div>
        <div class="team__card animate-team">
            <p>Brandon</p>
            <img src="../assets/images/person-4.jpg" alt="person" class="team__img">
        </div>
    </div>
</div>
    <!--Footer Section-->
    <?php include_once('templates/footer.php'); ?>
</body>
</html>