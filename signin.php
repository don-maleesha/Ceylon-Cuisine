<?php
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['email_address'])) {
    header("Location: homePage.php");
    exit();
}

require_once "dbconn.php"; // Include database connection

if (isset($_POST['submit'])) {
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    // Validate inputs
    if (!empty($email_address) && !empty($password)) {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM users WHERE email_address = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email_address);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['email_address'] = $user['email_address'];
                $_SESSION['user'] = "yes";
                header("Location: homePage.php");
                exit();
            } else {
                $error_message = "Invalid email address or password";
            }
        } else {
            $error_message = "Invalid email address or password";
        }
    } else {
        $error_message = "Please fill in all fields";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ceylon Cuisine</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./signin.css">
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
          <li><a href="homePage.php" class="raleway">Home</a></li>
          <li><a href="aboutus.php" class="raleway">About</a></li>
          <li><a href="contacts.php" class="raleway">Contact</a></li>
          <li><a href="recipes.php" class="raleway">Recipes</a></li>
        </ul>
      </nav>
      <div class="auth-buttons">
        <a href="signin.php" class="sign-in raleway">Sign in</a>
        <a href="signup.php" class="sign-up raleway">Sign up</a>
      </div>
    </div>
  </header>
  <div class="main-container">
    <div class="left">
      <div class="logo">
        <div class="logo-container">
          <img src="./images/Ceylon.png" alt="Logo">
          <span class="company-name josefin-sans">Ceylon Cuisine</span>
        </div>
      </div>
      <div class="form-container">
        <h2>Sign in to your account</h2>
        <?php if (isset($error_message)): ?>
          <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="" method="POST" id="signin-form">
          <input type="email" name="email_address" placeholder="Enter your email" aria-label="Email" required>
          <input type="password" name="password" placeholder="Enter your password" aria-label="Password" required>
          <div class="options">
            <label for="remember">
              <input type="checkbox" name="remember" id="remember"> Remember me
            </label>
            <a href="#" class="forgot-password raleway">Forgot password?</a>
          </div>
          <button type="submit" name="submit">Sign in</button>
        </form>
      </div>
    </div>
    <div class="right">
      <img src="./images/istockphoto-1603613324-612x612.jpg" alt="">
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="logo">
        <img src="./images/Ceylon.png" alt="Logo">
      </div>
      <div class="links">
        <h3 class="josefin-sans">Recipes</h3>
        <ul>
          <li><a href="#" class="raleway">Explore Recipes</a></li>
          <li><a href="#" class="raleway">Submit Your Recipe</a></li>
          <li><a href="#" class="raleway">Top Rated Dishes</a></li>
        </ul>
      </div>
      <div class="resources">
        <h3 class="josefin-sans">Kitchen Tips</h3>
        <ul>
          <li><a href="#" class="raleway">Cooking Techniques</a></li>
          <li><a href="#" class="raleway">Spice Guide</a></li>
          <li><a href="#" class="raleway">Food Pairing Tips</a></li>
        </ul>
      </div>
      <div class="company">
        <h3 class="josefin-sans">About Ceylon Cuisine</h3>
        <ul>
          <li><a href="#" class="raleway">Our Story</a></li>
          <li><a href="#" class="raleway">Contact Us</a></li>
          <li><a href="#" class="raleway">Privacy Policy</a></li>
          <li><a href="#" class="raleway">Terms of Conditions</a></li>
        </ul>
      </div>
      <div class="social">
        <h3 class="josefin-sans">Follow Us</h3>
        <ul>
          <li><a href="#" class="raleway"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" class="raleway"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#" class="raleway"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2024 Ceylon Cuisine. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>