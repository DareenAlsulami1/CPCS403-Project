<!-- 
Name: Dareen Hamed Alsulami    ID:2105810    Section: GAR
 Name: Njoud Naji Alahmadi     ID:2109470    Section: GAR
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global/stylesheet.css">
    <title>About Us - Luna Cafe and Bakery</title>
</head>

<body>
    <!-- Header -->
    <?php
    $prefix = "../"; 
    include $prefix . 'includes/header.php';
    include $prefix . 'includes/links.php';
    ?>

    <?php include '../includes/links.php'; ?>

    <div class="about-hero">
        <div class="about-container">
            <h2>About Us</h2>
            <p>Welcome to Luna Cafe and Bakery, where every bite and sip tells a story!</p>
        </div>
    </div>

    <div class="quote-section">
        <div class="quote-content">

            <blockquote>
                <i> "Behind every successful person is a substantial amount of coffee." </i>
            </blockquote>

            Here at Luna, we believe that success begins with the perfect brew. Whether you're fueling your ambitions, finding inspiration in a quiet moment, or simply savoring the joy of good company,
            let our carefully crafted coffee and handmade treats be a part of your journey.

        </div>
    </div>


    <div class="about-video">
        <div class="container">
            <div class="video-wrapper">
                <video controls width="640" muted autoplay loop>
                    <source src="../videos/late_are.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>


    <div class="about-content">

        <!-- Our Story Section -->
        <div class="about-section">
            <div class="text-content">
                <h3>Our Story</h3>
                <p>Luna Cafe and Bakery was born out of a shared love for great coffee, delicious pastries, and the joy of bringing people together. The name <em><b>Luna</b></em> is inspired by our dear friend’s beloved cat, who brings warmth and joy to our lives every day.</p>
                <p>Luna the cat is a symbol of comfort and joy. Just like her, our cafe is a place where everyone feels at home. We hope to bring the same warmth and happiness to your day.</p>
            </div>
            <div class="image-content">
                <img src="../images/luna_about.png" alt="animated picture of luna">
            </div>
        </div>

        <!-- Our Coffee Section -->
        <div class="about-section">
            <div class="text-content">
                <h3>Our Coffee</h3>
                <p>We source the finest coffee beans from sustainable farms in Ethiopia, Colombia, and Brazil. Every cup is crafted with care by our skilled baristas, ensuring a rich and flavorful experience.
                    <button type="button" onclick="window.location.href='menu.html'">Try our Coffee now</button>
                </p>
            </div>
            <div class="image-content">
                <img src="../images/coffee_beans.png" alt="coffee beans">
            </div>
        </div>

        <!-- Our Bakery Section -->
        <div class="about-section">
            <div class="text-content">
                <h3>Our Bakery</h3>
                <p>From flaky croissants to decadent cakes, our bakery offers fresh, handmade treats daily. Try our signature <em>Moonlight Muffins</em> or <em>Starry Night Cookies</em> for a taste of Luna’s magic.
                    <button type="button" onclick="window.location.href='menu.html'">Try our Bakery now</button>
                </p>
            </div>
            <div class="image-content">
                <img src="../images/bakery_items.png" alt="bakery items">
            </div>
        </div>

    </div>
    <!-- Footer -->
    <?php include('../includes/footer.php'); ?>
</body>

</html>