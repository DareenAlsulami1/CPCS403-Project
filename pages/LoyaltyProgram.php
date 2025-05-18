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
    <title>Loyalty Program</title>
</head>

<body>
    <!-- Header -->
    <?php
    $prefix = "../"; 
    include $prefix . 'includes/header.php';
    include $prefix . 'includes/links.php';
    ?>

    <div class="loyality-card-section">

        <div class="loyality-card-content">

            <div class="pdf-content">
                <embed src="..\docs\LoyaltyCard1.pdf" width="480" height="515" type="application/pdf">
            </div>

            <div class="text-content">
                <h2>Introducing the Luna Cafe & Bakery Loyalty Card!</h2>
                <p>
                    our way of saying thank you for being part of our community.
                    Inspired by Luna the cat’s comforting spirit, this card rewards you every time you visit.
                    Enjoy a free drink or pastry after collecting stamps,
                    and let each visit bring a little more warmth and joy to your day – just like Luna always does.
                </p>
            </div>

        </div>

    </div>

    </div>

    <!-- Footer -->
    <?php include('../includes/footer.php'); ?>
</body>

</html>