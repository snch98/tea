<?php
$isMain = true;
$title = "Home Page";
include("includes/header.php");
?>

<main>

    <h2>Summary</h2>
    <div class="summary">
        <img src="media/tea1.jpeg" alt="Tea" class="picture">
        <div>
            <p><span class="bold">A random fact about tea:</span></p>
            <p>
                In the 18th century, England's tea culture gave rise to a unique tradition called
                <em>"afternoon tea"</em>. Credit for its invention is often given to Anna, the Duchess
                of Bedford. She started having tea and snacks in the afternoon to ward off
                hunger between lunch and dinner, which was usually served late in the evening.
                This practice became fashionable among the English aristocracy and eventually
                evolved into the formal afternoon tea we know today, complete with
                <span class="italic">sandwiches, scones, cakes</span>,
                and of course, a variety of <span class="italic bold">teas</span>.
            </p>
        </div>
    </div>

    <div class="main-content">
        <div class="text-content">
            <h2>Pages Links</h2>
            <div class="pages-links">
                <?php listKindsOfTeas($conn) ?>
            </div>

            <h2>List of teas varieties</h2>
            <p>On my website you can buy any of these teas!</p>
            
            <div class="list-of-teas">
                <ul>
                  <?php listVarietiesOfTeas($conn) ?>
                </ul>
            </div>

            <h2>Download tea recipes</h2>
            <a class="main-link" href="media/tea-recipes.pdf" download="recipe">Download</a>
        </div>

        <div class="video-wrapper">
            <video controls width="400">
                <source src="media/tea_video.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <h2>Image Gallery</h2>
    <div class="slider-container">

        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<div class='slide'>";
            echo "<div class='numbertext'>" . $i . "/6</div>";
            echo "<img src='media/cup" . $i . ".jpeg'>";
            echo "</div>";
        }
        ?>

        <!-- Next and previous buttons -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="thumbnails">
            <?php for ($i = 1; $i <= 6; $i++)
                echo "<img class='thumb' src='media/cup" . $i . ".jpeg' alt='Cup for tea " . $i . "'>";
            ?>
        </div>
    </div>

    <h2>Product List</h2>
    <div class="products">
        <?php listInventoryOfTeas($conn); ?>
    </div>
</main>


<?php include("includes/footer.php") ?>