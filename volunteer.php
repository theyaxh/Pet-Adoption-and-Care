<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: rgb(251, 245, 235);">
    <main>
        <section class="hero-section">
            <h1>Get Involved!</h1>
            <p>Join our mission to provide loving homes and care for pets in need.</p>
        </section>

        <section class="volunteer-section">
            <h2>Volunteer Opportunities</h2>
            <p>Volunteers are the backbone of our organization. Your time and effort make a real difference in the lives of homeless animals.</p>

            <div id="volunteer-form">
                <h3>Volunteer Application</h3>
                <form action="backend/process_volunteering_application.php" method="post" onsubmit="return validate();">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteering-area">Volunteering Area:</label>
                        <select id="volunteering-area" name="volunteering-area" required>
                            <option value="">Select an option</option>
                            <option value="animal-care">Animal Care</option>
                            <option value="foster-care">Foster Care</option>
                            <option value="adoption-events">Adoption Events</option>
                            <option value="fundraising">Fundraising</option>
                            <option value="administrative">Administrative</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit Application</button>
                </form>
            </div>
        </section>

        <section class="other-ways">
            <h2>Other Ways to Get Involved</h2>
            <div class="option">
                <img src="resources/heart.png" alt="Donation Icon" id="fic">
                <h3>Donate</h3>
                <p>Your financial contributions help us provide medical care, food, and shelter for animals in need.</p>
                <a href="donate.php" class="btn">Donate Now</a>
            </div>
            <div class="option">
                <img src="resources/advocacy.png" alt="Advocacy Icon" id="fic">
                <h3>Advocate</h3>
                <p>Spread the word about responsible pet ownership and the importance of animal welfare.</p>
                <a href="#volunteer-form" class="btn">Get Involved</a>
            </div>
        </section>
    </main>

    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?> 