<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="styles.css">
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
        <section class="hero">
            <div class="hero-content">
                <h1>Adopt, Don't Shop</h1>
                <p>Give a loving home to a furry companion and change a life forever.</p>
                <a href="adopt.php"><button>Adopt Now</button></a>
                <a href="pet-care.php"><button>Pet Care</button></a>
            </div>
        </section>
 
        <section class="featured-pets">
            <h2>Featured Pets</h2>
            <div class="pet-cards">
                <div class="pet-card">
                    <a href="adopt.php"><img src="resources/pug-dog.png" alt="Featured Pet 1"></a>
                    <h3>Hulfy</h3>
                    <p>Pug Dog</p>
                    <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                </div>
                <div class="pet-card">
                    <a href="adopt.php"><img src="resources/siamese-cat.png" alt="Featured Pet 2"></a>
                    <h3>Loafy</h3>
                    <p>Siamese Cat</p>
                    <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                </div>
                <div class="pet-card">
                    <a href="adopt.php"><img src="resources/orange-cat.png" alt="Featured Pet 3"></a>
                    <h3>Simba</h3>
                    <p>Persian Cat</p>
                    <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                </div>
            </div>
        </section>
 
        <section class="pet-care-products">
            <h2>Pet Care Products</h2>
            <div class="product-cards">
                <div class="product-card">
                    <a href="https://www.petsy.online/products/fabled-dry-dog-food-gentle-giants-puppy-large-breed-recipe-trial-tin-250g"><img src="resources/dog-food.png" alt="Product 1"></a>
                    <h3>Dog Food</h3>
                    <p>Premium quality dog food for all breeds.</p>
                    <a href="https://www.petsy.online/products/fabled-dry-dog-food-gentle-giants-puppy-large-breed-recipe-trial-tin-250g" class="buy-btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://goofytails.com/collections/cat-toys/products/goofy-tails-fish-cat-tree-post-2-in-1-scratch-post-and-activity-tree-for-cats-kittens"><img src="resources/cat-toy.png" alt="Product 2"></a>
                    <h3>Cat Toys</h3>
                    <p>Interactive toys to keep your feline friend entertained.</p>
                    <a href="https://goofytails.com/collections/cat-toys/products/goofy-tails-fish-cat-tree-post-2-in-1-scratch-post-and-activity-tree-for-cats-kittens" class="buy-btn">Buy Now</a>
                </div>
                <div class="product-card">
                    <a href="https://www.target.com/p/pixiepaws-6-piece-pets-grooming-set/-/A-89802539#lnk=sametab"><img src="resources/grooming-kit.png" alt="Product 3"></a>
                    <h3>Pet Grooming Kit</h3>
                    <p>Essential grooming tools for your furry pal.</p>
                    <a href="https://www.target.com/p/pixiepaws-6-piece-pets-grooming-set/-/A-89802539#lnk=sametab" class="buy-btn">Buy Now</a>
                </div>
            </div>
        </section>
 
        <section class="success-stories">
            <h2>Success Stories</h2>
            <div class="story-cards">
                <div class="story-card">
                    <a href="success-stories.php"><img src="resources/p-1.png" alt="Success Story 1"></a>
                    <h3>The Pawfect Match</h3>
                    <p>Read how a family found their forever friend at Pawfect Pawtrails.</p>
                    <a href="success-stories.php" class="read-more">Read More</a>
                </div>
                <div class="story-card">
                    <a href="success-stories.php"><img src="resources/p-2.png" alt="Success Story 2"></a>
                    <h3>A Second Chance</h3>
                    <p>Discover the heartwarming tale of a rescued pet's journey to a loving home.</p>
                    <a href="success-stories.php" class="read-more">Read More</a>
                </div>
            </div>
        </section>
 
        <section class="cta">
            <div class="cta-content">
                <h2>Join the Pawfect Pawtrails Family</h2>
                <p>Become a part of our mission to find loving homes for every pet.</p>
                <a href="donate.php"><button>Donate Now</button></a>
                <a href="volunteer.php"><button>Get Involved</button></a>
            </div>
        </section>
    </main>

    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?>