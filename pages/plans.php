<!DOCTYPE html>
<html lang="en">
<?php include_once('templates/header.php'); ?>
<body>
    <!---Navbar Section-->
    <nav class="navbar">
        <a href="../index.php" class="navbar__logo">MAXIMA FITNESS</a>
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
     <!--Membership Section-->
     <div class="memberships">
        <h1 class="animate-membership">View Our Plans</h1>
        <p class="membership__desc animate-membership">
         Get Started today and Receive 25% off your first month
        </p>
        <div class="membership__wrapper">
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-dumbbell card-icon"></i>
                    <h3>Starter</h3>
                </div>
                <div class="membership__perks">
                    <p>Get Access to the entire gym</p>
                    <p>$30 per month</p>
                </div>
                <a href="/" class="button">Sign Up</a>
            </div>
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-bicycle card-icon"></i>
                    <h3>Silver</h3>
                </div>
                <div class="membership__perks">
                    <p>Get Access to the entire gym</p>
                    <p>Group Fitness Classses</p>
                    <p>$50 per month</p>
                </div>
                <a href="/" class="button">Sign Up</a>
            </div>
            <div class="membership__card animate-card">
                <div class="membership__title">
                    <i class="fas fa-dumbbell card-icon"></i>
                    <h3>Gold</h3>
                </div>
                <div class="membership__perks">
                    <p>Get Access to the entire gym</p>
                    <p>Group Fitness Classses</p>
                    <p>Private Personal Training</p>
                    <p>$100 per month</p>
                </div>
                <a href="/" class="button">Sign Up</a>
            </div>
        </div>
    </div>
    <!--Footer Section-->
    <?php include_once('templates/footer.php'); ?>
</body>
</html>