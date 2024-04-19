<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="signin-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
</head>
<body>
    <div class="image-wrapper">
        <a class="paw" href="home.php">
            <img src="resources/Pawfect Pawtrails-transparent.png" alt="Pawfect Pawtrails">
        </a>
    </div>
    <main>
        <div>
            <section class="login-section">
                <h2>Login to Your Account</h2>
                <form action="backend/loginaccess.php" method="post">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label for="remember-me">Remember Me</label>
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    
                    <button type="submit">Login</button>
                </form>
                
                <div class="signup-option">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="content">
            <section class="footer-links">
                <ul>
                    <li><a class="link" href="info/privary-policy.php" target="_blank">Privacy Policy</a></li>
                    <li><a class="link" href="info/tos.php" target="_blank">Terms of Service</a></li>
                </ul>
            </section>
        </div>
    </footer>
</body>
</html>