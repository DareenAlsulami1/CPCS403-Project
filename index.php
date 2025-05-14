<!-- 
Name: Dareen Hamed Alsulami    ID:2105810    Section: GAR
 Name: Njoud Naji Alahmadi     ID:2109470    Section: GAR
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global/stylesheet.css">
    <title>Home Page</title>
</head>
<body>
     <!-- Header -->
      <header>
        <?php include 'navigationMenu.php'; ?>
        <?php include 'logo.php'; ?>
      </header>
   

   <div class="introduction-section">

        <!-- introduction Section -->
        <div class="introduction-content">
            <div class="text-content">
                <h2>Welcome To The Luna Cafe & Bakery!</h2>
                <p>
                    Step into a warm and inviting space where the rich aroma of freshly 
                    brewed coffee and the delightful scent of homemade pastries create the perfect atmosphere,
                    where every cup is brewed with love and every bite feels like home.
                </p>
            </div>
            <div class="image-content">
                <img src="images/coffee_latte_cup.png" alt="coffee cup">
            </div>
        </div>

    </div>

    <div class="weeklyOffers-Section">
        <div class = "weeklyOffers-content">
            <img src="images/weekly_offers_section_header.png" alt="offers board">
            <table>
                <tr>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                <tr>
                    <td> Kickstart Your Week! Enjoy a free baked treat with every hot Americano order </td>
                    <td> </td>
                    <td> Enjoy 10% off all cold drinks</td>
                    <td> </td>
                    <td> Weekend Special! Enjoy a free Starry Night Cookie with every drink order </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
        </div>
    </div>

    <div class = "weather-section">
        <div class="image-content">
                <img src="images/weather.png" alt="weather">
        </div>
        <h1 id="temp">Loading temperature...</h1>
        <p id="tempMenu">Loading Menu Choice...</p>
    </div>
 

    <div class="signature-section">
    
        <img class = "menuSectionHeader" src="/images/signature_items_section_header.png" alt="cold drinks section header">
        
        <p>
            Explore and indulge in our handcrafted specialties, made with the finest ingredients and a touch of magic.<br> 
            From rich, velvety lattes to freshly baked delights, these are the flavors that define Luna Cafe & Bakery.
        </p>

        

        <div class="signature-content">            
            <!--  signature item #1 -->
            <div class = "signatureMenuItem">
                <img src="/images/luna_latte.png" alt="item1">
                <h3>
                    Luna Latte
                </h3>
            </div>

            <!--  signature item #2 -->
            <div class = "signatureMenuItem">
                <img src="/images/moonlight_muffins.png" alt="item2">
                <h3>
                    Moonlight Muffins
                </h3>
            </div>

            <!--  signature item #3 -->
            <div class = "signatureMenuItem">
                <img src="/images/starry_night_cookies.png" alt="item3">
                <h3>
                    Starry Night Cookies
                </h3>
            </div>

        </div>

    </div>
   



<!-- Footer -->
<?php include 'footer.php'; ?>
<script src="api/apis.js"></script>
</body>
</html>