<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unleashing Tech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
<section class="header">
    <nav>
        <img src="../TechMentor/img/OSO1XY0.jpg" alt="Profile Image" class="profile-image">
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" id="closeMenu" onclick="hideMenu()"></i>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" id="openMenu" onclick="showMenu()"></i>
    </nav>

    <div class="text-box">
        <h1>Welcome to Our Unleashing Tech</h1>
        <p>We are the company that focuses on expanding technology <br>
           with innovative and creative ideas that will help our society.</p>
        <a href="" class="hero-btn">Find Out More</a>
    </div>
</section>
<!------- Mission -------->

<section class="mission">
    <h1>Our Mission</h1>
    <p>Strategic planning is an organization process for defining
         their strategy so that they can accomplish specific goals</p>

<div class="row">
    <div class="mission-col">
        <h3>Who we are</h3>
        <p>Strategic planning is an organization process for defining their strategy
             so that <br>
              they can accomplish specific goals and objectives. We offer affordable custom
              website design done by professionals.</p>
        
    </div>
    <div class="mission-col">
        <h3>What we do</h3>
        <p>Strategic planning is an organization process for defining their strategy
             so that <br>
             they can accomplish specific goals and objectives. We offer affordable custom
              website design done by professionals.</p>
        
    </div>
</div>

</section>


<!-----Our Vision------>

<section class="Vision">
    <h1>Our Vision</h1>
   


    <div class="vision-col">
        <h3>What we do</h3>
        <p>Strategic planning is an organization process for defining their strategy
             so that
             they can accomplish specific goals and objectives. We offer affordable custom
              website design done by professionals.</p>
        
    </div>
</div>

</section>

<!-----Our Team------>

<section class="team">
    <h1>Our Team</h1>
    <div class="team-container">
        <div class="team-col">
            <img src="../TechMentor/img/DLM03502.jpg" alt="Saeed Manong'a">
            <p class="team-name">Saeed Manong'a</p>
        </div>

        <div class="team-col">
            <img src="../TechMentor/img/IMG_20240711_160831.jpg" alt="Saeed Manong'a">
            <p class="team-name">Samir M'doka</p>
        </div>

        <div class="team-col">
            <img src="../TechMentor/img/Screenshot_20240616-164618.png" alt="Saeed Manong'a">
            <p class="team-name">George Kayira</p>
        </div>
    </div>
</section>

<!------Call to Action------>

<section class="cta">
    <h1>Feel free to contact us from anywhere you <br> are whether its in Malawi or Outside Malawi </h1>
    <a href="" class="hero-btn">CONTACT US</a>

</section>

<!------footer------>

<section class="footer">
    <h4>About Us</h4>
    <p>Feel free to contact us from anywhere you <br> are whether it's in Malawi or outside Malawi.</p>
    <div class="icons">
        <a href="https://www.facebook.com" target=" blank">
            <i class="fa-brands fa-facebook" style="color: #1877F2;"></i>
        </a>
        <a href="https://twitter.com" target="_blank">
            <i class="fa-brands fa-x" style="color: #000000;"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <i class="fa-brands fa-instagram" style="color: #E4405F;"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank">
            <i class="fa-brands fa-linkedin" style="color: #0077B5;"></i>
        </a>
        <a href="https://wa.me/yourwhatsapplink" target="_blank">
            <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
        </a>
    </div>
    <p>© 2025. Crafted with ❤️ by Saeed Manong'a. All rights reserved.</p>
</section>










<!-- JavaScript for Toggle Menu -->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }

    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>



</body>
</html>