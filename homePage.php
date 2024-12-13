<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ceylon Cuisine</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Satisfy&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
      <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./ceylon-cuisine.css">
      <script src="ceylon-cuisine.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="./images/Ceylon.png" alt="Logo">
          <span class="company-name josefin-sans">Ceylon Cuisine</span>
        </div>
        <nav>
          <ul>
            <li><a href="homePage.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contacts.php">Contact</a></li>
            <li><a href="recipes.php">Recipes</a></li>
          </ul>
        </nav>
        <div class="auth-buttons">
          <a href="signin.php" class="sign-in">Sign in</a>
          <a href="signup.php" class="sign-up">Sign up</a>
        </div>
      </div>
    </header>
    <section class="hero">
      <div class="text">
        <h1 id="welcomeMessage" class="josefin-sans">Welcome to Ceylon Cuisine!</h1>
        <p class="playwrite-gb-s">We are home to the largest collection of traditional Sri Lankan food recipes.</p>
        <div class="buttons">
          <a href="#" class="explore-recipes">Explore</a>
          <a href="#" class="submit-recipe">Submit</a>
        </div>
      </div>
      <img src="./images/istockphoto-2169029066-612x612.jpg" alt="" class="src">
    </section>
    <section class="features">
      <h2>Recipe features</h2>
      <p>Discover the unique flavors of Sri Lanka with our carefully curated recipes, user-friendly tools, and a community that celebrates culinary creativity.</p>
      <div class="feature-list">
        <div class="feature">
          <img src="./images/istockphoto-1350375887-612x612.jpg" alt="" class="src">
          <h3>Local ingredients guide</h3>
          <p>Learn about sourcing fresh, authentic ingredients to bring Sri Lankan flavors to your kitchen.</p>
        </div>
        <div class="feature">
          <img src="./images/istockphoto-1603613324-612x612.jpg" alt="" class="src">
          <h3>Recipe customization based on dietary needs.</h3>
          <p>Tailor recipes to suit your dietary needs, whether you're vegan, gluten-free, or keto.</p>
        </div>
        <div class="feature">
          <img src="./images/istockphoto-1603613324-612x612.jpg" alt="" class="src">
          <h3>Video tutorials for traditional cooking methods.</h3>
          <p>Master traditional cooking methods with step-by-step video demonstrations.</p>
        </div>
      </div>
    </section>
    <section class="trusted-by">
        <h2>Trusted by</h2>
        <div>
            <img src="https://placehold.co/100x40" alt="Company logo 1">
            <img src="https://placehold.co/100x40" alt="Company logo 2">
            <img src="https://placehold.co/100x40" alt="Company logo 3">
            <img src="https://placehold.co/100x40" alt="Company logo 4">
            <img src="https://placehold.co/100x40" alt="Company logo 5">
        </div>
    </section>
    <section class="team">
        <h2>Our Team</h2>
        <p>Do consectetur proident proident id eiusmod deserunt consequat pariatur ad ex velit do Lorem reprehenderit.</p>
        <div class="team-list">
            <div class="member">
                <img src="https://placehold.co/300x300" alt="Team member 1">
                <h3>Full name</h3>
                <p>Professional title</p>
                <p>Commodo qui nulla ipsum ea cupidatat sit aliqua dolore.</p>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="member">
                <img src="https://placehold.co/300x300" alt="Team member 2">
                <h3>Full name</h3>
                <p>Professional title</p>
                <p>Commodo qui nulla ipsum ea cupidatat sit aliqua dolore.</p>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="member">
                <img src="https://placehold.co/300x300" alt="Team member 3">
                <h3>Full name</h3>
                <p>Professional title</p>
                <p>Commodo qui nulla ipsum ea cupidatat sit aliqua dolore.</p>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="member">
                <img src="https://placehold.co/300x300" alt="Team member 4">
                <h3>Full name</h3>
                <p>Professional title</p>
                <p>Commodo qui nulla ipsum ea cupidatat sit aliqua dolore.</p>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="logo">
                <img src="https://placehold.co/100x40" alt="Logo">
            </div>
            <div class="links">
                <h3>Product</h3>
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>
            <div class="resources">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">User guides</a></li>
                    <li><a href="#">Webinars</a></li>
                </ul>
            </div>
            <div class="company">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="social">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
  </body>
</html>