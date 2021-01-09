<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxima Fitness Gym</title>
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <meta name="referrer" content="strict-origin" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">   
</head>
<body>
    <!---Navbar Section-->
    <nav class="navbar">
        <a href="index.php" class="navbar__logo">MAXIMA FITNESS</a>
        <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="navbar__menu">
            <a href="index.php" class="navbar__link">Home</a>
            <a href="pages/services.php" class="navbar__link">Services</a>
            <a href="pages/plans.php" class="navbar__link">Plans</a>
            <a href="pages/trainers.php" class="navbar__link">Trainers</a>
        </div>
    </nav>
    <!--Hero Section-->
    <div class="hero">
         <div class="hero__content">
             <h1 class="animate-hero">Maxima Fitness</h1>
             <p class="animate-hero">Start From 500k</p>
             <a href="/" class="button animate-hero">Get Started</a>
         </div>
    </div>
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
                <img src="assets/images/gym-2.jpg" alt="gym" class="services__img animate-img">
            </div>
        </div>
    </div>
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
                <img src="assets/images/person-1.jpg" alt="person" class="team__img">
            </div>
            <div class="team__card animate-team">
                <p>Michael</p>
                <img src="assets/images/person-2.jpg" alt="person" class="team__img">
            </div>
            <div class="team__card animate-team">
                <p>Johan</p>
                <img src="assets/images/person-3.jpg" alt="person" class="team__img">
            </div>
            <div class="team__card animate-team">
                <p>Brandon</p>
                <img src="assets/images/person-4.jpg" alt="person" class="team__img">
            </div>
        </div>
    </div>
    <!--Email Section-->
    <div class="email">
        <div class="email__content">
            <h1 class="animate-email">Get Access to Members Only Perks</h1>
            <p class="animate-email">
                Sign Up for our newsletter below to get $100 off your first
                personal training Session!
            </p>
            <form action="#" class="animate-email">
                <div class="form__wrap">
                    <label for="email"> 
                        <input type="email" placeholder="Enter your email" id=:email>
                    </label>
                    <button class="button" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <!--Footer Section-->
    <div class="footer">
    <div class="footer__wrapper">
        <div class="footer__desc">
            <h1>MAXIMA FITNESS</h1>
            <p>Great fitness gym located in downtown Jakarta</p>
            <p id="phone">021 - 755 - 3954</p>
        </div>
        <div class="footer__links">
            <h2 class="footer__title">Contact Us</h2>
            <a href="services.html" class="footer__link">Contact</a>
            <a href="services.html" class="footer__link">Support</a>
            <a href="services.html" class="footer__link">Sponsorships</a>
        </div>
    </div>
    <div class="footer__wrapper">
        <div class="footer__links">
            <h2 class="footer__title">Memberships</h2>
            <a class="footer__link" href="/">Pricing</a>
            <a class="footer__link" href="/">Plans</a>
            <a class="footer__link" href="/">FAQ</a>
    </div>
        <div class="footer__links">
            <h2 class="footer__title">Social Media</h2>
            <a class="footer__link" href="http://instagram.com/_u/maximafitness/">Instagram</a>
            <a class="footer__link" href="/">Facebook</a>
            <a class="footer__link" href="/">Youtube</a>
            <a class="footer__link" href="/">Twitter</a>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="assets/js/app.js"></script>
</head>
</body>
</html>