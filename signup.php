<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Pawfect Pawtrails</title>
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
            <section class="signup-section">
                <h2>Create Your Account</h2>
                <form action="backend/register.php" method="post" onsubmit="return validate();">
                    <label for="name">Name:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    
                    <div class="form-options">
                        <div class="terms-conditions">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I accept the <a href="info/tos.php" target="_blank">Terms of Service</a> & <a href="info/privary-policy.php" target="_blank">Privacy Policy</a></label>
                        </div>
                    </div>
                    <button type="submit" class="btn">Signup</button>
                    
                </form>
                
                <div class="login-option">
                    <p>Already have an account? <a href="login.php">Log In</a></p>
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
