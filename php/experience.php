<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    require 'header.php';
    ?>

    <main>
        <div class="div_welcome">

            <video autoplay loop muted>
                <source src="../videos/Hawaii Drone Footage.mp4" type="video/mp4">
            </video>
            <div class="header">
                <h1>Experience the HAWAII</h1>
            </div>
        </div>

        <div class="experince-showcase">
            <h1>See & Do in Hawaii</h1>
            <div class="flex-wrapper">
                <div class="experince-wrapper">
                    <div class="sightseeing-showcase">
                        <img src="../images/Experience-showcase-img/Napali_0.jpg" alt="">
                        <h2>Sightseeing</h2>
                        <p>In Hawaii, breathtaking sights await you at every turn. Witness nature's power at our national
                            parks, tour amazing museums or find your perfect beach.</p>

                    </div>
                    <div class="advantures-showcase">
                        <img src="../images/Experience-showcase-img/06917.jpg" alt="">
                        <h2>Advantures</h2>
                        <p>From surfing the gentle waves of Waikiki Beach to snorkeling with manta rays on the Kona Coast,
                            the Hawaiian Islands are truly an adventurer's playground. </p>
                    </div>
                    <div class="golf-showcase">
                        <img src="../images/Experience-showcase-img/BIVB_0313.jpg" alt="">
                        <h2>Golf</h2>
                        <p>Hawaii's spectacular golf courses beckon players from around the world. But beware: the
                            distractingly beautiful scenery is a hazard in itself.</p>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php
    require 'footer.php';
    ?>
</body>

</html>