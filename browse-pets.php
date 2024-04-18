<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Pets - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="browse-pets-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <main style="background-color: rgb(251, 245, 235);">
        <section class="browse-pets">
            <section class="heroo">
                <div class="hero-container">
                    <h1>Browse Pets</h1>
                    <div class="hero-buttons">
                        <a href="#dogs"><button>Dogs</button></a>
                        <a href="#cats"><button>Cats</button></a>
                    </div>
                </div>
            </section>

            <div class="pet-listings">
                <h2 id="dogs">Dogs</h2>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/pug-dog.png" alt="Dog 1">
                        <h3>Hulfy</h3>
                        <p>Age: 2 years</p>
                        <p>Breed: Pug</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/gold-ret.jpg" alt="Dog 2">
                        <h3>Luna</h3>
                        <p>Age: 4 years</p>
                        <p>Breed: Golden Retriever</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/gmnshprd.png" alt="Dog 3">
                        <h3>Max</h3>
                        <p>Age: 1 year</p>
                        <p>Breed: German Shepherd</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/boxer.png" alt="Dog 4">
                        <h3>Rocky</h3>
                        <p>Age: 6 years</p>
                        <p>Breed: Boxer</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/australian.png" alt="Dog 5">
                        <h3>Sadie</h3>
                        <p>Age: 2 years</p>
                        <p>Breed: Australian Shepherd</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/beagle.png" alt="Dog 6">
                        <h3>Daisy</h3>
                        <p>Age: 3 year</p>
                        <p>Breed: Beagle</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
 
                <h2 id="cats">Cats</h2>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/siamese-cat.png" alt="Cat 1">
                        <h3>Loafy</h3>
                        <p>Age: 3 years</p>
                        <p>Breed: Siamese</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/tabby.png" alt="Cat 2">
                        <h3>Mittens</h3>
                        <p>Age: 2 years</p>
                        <p>Breed: Tabby</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/orange-cat.png" alt="Cat 3">
                        <h3>Simba</h3>
                        <p>Age: 5 years</p>
                        <p>Breed: Persian</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/sh.png" alt="Cat 4">
                        <h3>Oliver</h3>
                        <p>Age: 4 years</p>
                        <p>Breed: British Shorthair</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/bengal.png" alt="Cat 5">
                        <h3>Milo</h3>
                        <p>Age: 1 years</p>
                        <p>Breed: Bengal</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/scot.png" alt="Cat 6">
                        <h3>Gizmo</h3>
                        <p>Age: 3 years</p>
                        <p>Breed: Scottish Fold</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
                
    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?>