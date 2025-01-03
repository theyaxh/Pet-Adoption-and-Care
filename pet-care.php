<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="pet-care-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: rgb(251, 245, 235);">
    <main>
        <section class="heroo">
            <div class="hero-container">
                <h1>Your Pet. Our Care</h1>
                <div class="hero-buttons">
                    <a href="#petprod"><button>Pet Care</button></a>
                    <a href="#vet-booking-form"><button>Book a Vet</button></a>
                </div>
            </div>
        </section>

        <section class="book-vet">
            <h2>Book a Vet</h2>
            <p>Schedule an appointment with our trusted veterinarians for routine check-ups, vaccinations, or any health concerns.</p>
            <form id="vet-booking-form" action="backend/process_vet_booking.php" method="post" onsubmit="return validate();">
                <div class="form-group">
                    <label for="pet-name">Pet's Name:</label>
                    <input type="text" id="pet-name" name="pet-name" required>
                </div>
                <div class="form-group">
                    <label for="owner-name">Owner's Name:</label>
                    <input type="text" id="owner-name" name="owner-name" required>
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
                    <label for="loc">Area/Location:</label>
                    <input type="text" id="loc" name="loc" required>
                </div>
                <div class="form-group">
                    <label for="appointment-date">Preferred Date:</label>
                    <input type="date" id="appointment-date" name="appointment-date" required>
                </div>
                <div class="form-group">
                    <label for="appointment-time">Preferred Time:</label>
                    <input type="time" id="appointment-time" name="appointment-time" required>
                </div>
                <div class="form-group">
                    <label for="reason">Reason for Visit:</label>
                    <textarea id="reason" name="reason" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Book Appointment</button>
            </form>
        </section>

        <section class="pet-products">
            <h2 id="petprod">Pet Product Recommendations</h2>
            <div class="product-grid">
                <div class="product-card">
                    <a href="https://www.amazon.in/PAPA-PAWSOME-Conditioner-Ingredients-Anti-Itching/dp/B07QWV6J9F/ref=sr_1_3_sspa?sr=8-3-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY" target="_blank"><img src="resources/shampoo.png" alt="Product 1"></a>
                    <h3>Dog Shampoo</h3>
                    <p>Antimicrobial, Anti-Fungal, Anti-Itch, Cleansing, and Nourishing Shampoo</p>
                    <a href="https://www.amazon.in/PAPA-PAWSOME-Conditioner-Ingredients-Anti-Itching/dp/B07QWV6J9F/ref=sr_1_3_sspa?sr=8-3-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY" target="_blank" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://www.amazon.in/Bathright-Lavender-Multipurpose-Anti-Bacterial-Deodorizing/dp/B0BD7N6R47/ref=sr_1_46?sr=8-46" target="_blank"><img src="resources/wipes.png" alt="Product 2"></a>
                    <h3>Pet Wipes</h3>
                    <p>Aloe Vera Fresh Wet Wipes for Cleaning & Deodorizing for Cats and Dogs</p>
                    <a href="https://www.amazon.in/Bathright-Lavender-Multipurpose-Anti-Bacterial-Deodorizing/dp/B0BD7N6R47/ref=sr_1_46?sr=8-46" target="_blank" class="btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://www.amazon.in/Bark-Out-Loud-Vivaldis-Multivitamins/dp/B09TTNHD1H/ref=sr_1_57_sspa?sr=8-57-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9idGY" target="_blank"><img src="resources/chewstix.png" alt="Product 3"></a>
                    <h3>Immunity Chewstix</h3>
                    <p>Boost Health & Vitality with Omega & Zinc for Dogs & Cats of All Life Stages</p>
                    <a href="https://www.amazon.in/Bark-Out-Loud-Vivaldis-Multivitamins/dp/B09TTNHD1H/ref=sr_1_57_sspa?sr=8-57-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9idGY" target="_blank" class="btn">Buy Now</a>
                </div>
            </div>
        </section>
    </main>

    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?>