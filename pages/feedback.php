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
    <title>Feedback</title>
</head>

<body>
    <!-- Header -->
    
    <?php
    $prefix = "../"; 
    include $prefix . 'includes/header.php';
    include $prefix . 'includes/links.php';
    ?>

    <div class="container">
        <div class="contact-form">
            <h2>Feedback Form</h2>
            <form name="feedback" action="#" method="POST" onsubmit="return validateFeedbackForm()" novalidate>
                <fieldset>
                    <legend>Personal Information:</legend>
                    <!-- Name -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">

                    <!-- Email -->
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </fieldset>

                <fieldset>
                <legend>Feedback:</legend>
                    <!-- User Rating Radio Buttons -->
                    <div class="rating-options">
                        <label>User Rating:</label>
                        <label for="good">
                            <input type="radio" id="good" name="rating" value="good"> Good
                        </label>
                        <label for="average">
                            <input type="radio" id="average" name="rating" value="average"> Average
                        </label>
                        <label for="poor">
                            <input type="radio" id="poor" name="rating" value="poor"> Poor
                        </label>
                    </div>

                    <!-- Service Selection Checkboxes -->
                    <div class="service-options">
                        <label>Services Used:</label>
                        <label for="bakery">
                            <input type="checkbox" id="bakery" name="service" value="bakery"> Bakery Items
                        </label>
                        <label for="dine-in">
                            <input type="checkbox" id="dine-in" name="service" value="dine-in"> Dine-In
                        </label>
                        <label for="takeaway">
                            <input type="checkbox" id="takeaway" name="service" value="takeaway"> Takeaway
                        </label>
                    </div>

                    <!-- User Preferences Dropdown -->
                    <label for="preferences">User Preferences:</label>
                    <select id="preferences" name="preferences">
                        <option value="" disabled selected>Select your preference</option>
                        <option value="fresh_pastries">Fresh Pastries & Baked Goods</option>
                        <option value="coffee">Coffee & Specialty Drinks</option>
                        <option value="ambiance">Cafe Ambiance & Atmosphere</option>
                        <option value="takeaway_convenience">Convenience of Takeaway</option>
                        <option value="dine_in_experience">Dine-In Experience</option>
                        <option value="healthy_options">Healthy & Low-Calorie Options</option>
                        <option value="seasonal_items">Seasonal Menu Items</option>
                    </select>

                    <!-- Additional Comments Textarea -->
                    <label for="comments">Additional Comments:</label>
                    <textarea id="comments" name="comments" placeholder="Write your comments here..."></textarea>
                </fieldset>
                <!-- Submit Button -->
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php include('../includes/footer.php'); ?>
    <script src="../scripts/validation.js"></script>
</body>

</html>