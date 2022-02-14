<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitt Feriested</title>
    <link rel="stylesheet" href="../style/main.css">
    <script>
        function islandHover(element) {
            var img = document.getElementsByClassName("island")[0];
            img.src = "../images/islands_".concat(element, ".png");
        }

        function islandRelease() {
            document.getElementsByClassName('island')[0].src = '../images/islands.png'
        }
    </script>
</head>

<body>
    <?php
    require 'header.php';
    ?>

    <main class="container">
        <!-- Welcome -->
        <div class="div_welcome">
            <img src="../images/sacha-verheij-X0rRYtJy0R8-unsplash.jpg" alt="">
            <div class="header">
                <h1>Welcome to HAWAII</h1>
            </div>
        </div>

        <!-- Glimps -->
        <div class="div_glimpse">
            <h2>Glimpse of Hawaii</h2>
            <div class="div_festival">
                <img src="../images/festival.jpg" alt="">
                <div class="festival_text">
                    <a href="">
                        <h3>Annual Festivals and Events</h3>
                    </a>
                    <p>Find fun ways to celebrate food, culture and competition at these big events.</p>
                    <a class="more" href="">More ></a>
                </div>
            </div>
            <div class="div_culture">
                <img src="../images/Arts and Culture in Hawaii.jpg" alt="">
                <div class="culture_text">
                    <a href="">
                        <h3>Arts and Culture in Hawaii</h3>
                    </a>
                    <p>Discover the unique aspects of Hawaiian culture, including arts, history, customs and more.
                    </p>
                    <a class="more" href="">More ></a>
                </div>
            </div>
            <div class="div_cuisine">
                <img src="../images/Hawaii Regional Cuisine - Ahi Tostada.jpg" alt="">
                <div class="cuisine_text">
                    <a href="">
                        <h3>Hawaii Regional Cuisine</h3>
                    </a>
                    <p>Get a taste of the flavors of Hawaii during your visit.
                    </p>
                    <a class="more" href="">More ></a>
                </div>
            </div>
        </div>
        <!-- Map -->
        <div class="map">
            <div class="map-wrapper">
                <img class="island" src="../images/islands.png" alt="Island">

            </div>
            <p class="kauai" onmouseover="islandHover('kauai');" onmouseout="islandRelease();"><span>Kauai ></span>
            </p>
            <p class="oahu" onmouseover="islandHover('oahu');" onmouseout="islandRelease();"><span>Oahu ></span></p>
            <p class="molokai" onmouseover="islandHover('molokai');" onmouseout="islandRelease();"><span>Molokai ⌄</span></p>
            <p class="maui" onmouseover="islandHover('maui');" onmouseout="islandRelease();"><span>
                    < Maui</span> </p> <p class="lanai" onmouseover="islandHover('lanai');" onmouseout="islandRelease();"><span>Lanai ></span>
            </p>
            <p class="hawaii" onmouseover="islandHover('hawaii');" onmouseout="islandRelease();"><span>Hawaii ></span>
            </p>
            <a href="#"></a>



        </div>
    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>