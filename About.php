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

<section class="sub-header">
    <nav>
    <img src="../TechMentor/img/OSO1XY0.jpg" alt="Profile Image" class="profile-image">
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" id="closeMenu" onclick="hideMenu()"></i>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="About.php">About</a>
            </li>
            </ul>
        </div>
        <i class="fa fa-bars" id="openMenu" onclick="showMenu()"></i>
    </nav>

    <h1>About Us</h1>
</section>   
<!------about us content---->

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We are one of the best tech company</h1>
            <p>Strategic planning is an organization process for defining their strategy
             so that
             they can accomplish specific goals and objectives. We offer affordable custom
              website design done by professionals.</p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            
        </div>
        <div class="about-col">
            <img src="../TechMentor/img/desola-lanre-ologun-IgUR1iX0mqM-unsplash.jpg" >
            
        </div> 
    </div>

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