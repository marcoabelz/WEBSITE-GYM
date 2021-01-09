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
    <!-- Services Section -->
    <div class="services">
        <div class="services__container">
            <div>
                <p class="topline animate-services">Features</p>
                <h1 class="services__heading animate-services">What we offer</h1>
                <div class="services__features">
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Group Fitness Classses
                   </p>
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Personal Trainer Sessions
                   </p>
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Indoor Pool Area
                   </p>
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Steam Room and Sauna
                   </p>
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Basketball Court
                   </p>
                   <p class="services__feature animate-services">
                    <i class="fas fa-check-circle"></i>Open 24/7 
                   </p>
                </div>
            </div>
            <div>
                <img src="../assets/images/gym-2.jpg" alt="gym" class="services__img animate-img">
            </div>
        </div>
    </div>
    <!--Footer Section-->
    <?php include_once('templates/footer.php'); ?>
</body>
</html>