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

    <h1>Contact Us</h1>
</section>   
<!------contact us---->

<section class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d123999.57929992954!2d33.795205!3d-13.779666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191f7f553fb8b719%3A0xf97ced54a5f884b6!2sLumbadzi!5e0!3m2!1sen!2smw!4v1739023834809!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
    <div class="contact-col">
    <div>
        <i class="fa fa-home"></i>
        <span>
            <h5>M1 Road</h5>
            <p>Lumbadzi, Malawi</p>
        </span>
    </div>
    <div>
        <i class="fa fa-phone"></i>
        <span>
            <h5>+265 992410826</h5>
            <p>Monday to Saturday, 9am to 4pm</p>
        </span>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <span>
            <h5>saeedmanonga@gmail.com</h5>
            <p>Email Us</p>
        </span>
    </div>
</div>
<div class="contact-col">
    <form action="form-handler.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter Email Address" required>
        <input type="text" name="subject" placeholder="Enter your Subject" required>
        <textarea rows="8" name="message" placeholder="Message" required></textarea>
        <button type="submit" class="hero-btn red-btn">Send Message</button>
        
    </form>
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