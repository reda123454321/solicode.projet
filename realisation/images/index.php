<?php

require_once "function.php";
require_once "data.php";


if (isset($_GET["id"])) {

    $id = (int) $_GET["id"];

    $product = getProductById($products, $id);

} else {

    $products = getProducts($products);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PYRAMIX</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="search">
        <button id="menu">☰</button>
        <img src="../Réalisation/images/logo.png" alt="">

        <input type="search" placeholder="search">

        <nav class="nav">
            <a href="">Sign in</a>
            <a href="">About</a>
            <a href="#card">Products</a>
        </nav>

    </div>


    <header class="header">



    </header>


    <main class="main">


        <?php if (isset($_GET["id"])) { ?>


            <?php if (isset($product)) { ?>

                <section id="card">

                    <h3>
                        <?= $product["category"] . " " . $product["name"] ?>
                    </h3>

                    <img src="<?= $product["image"] ?>" alt="">

                    <p>COLOR :</p>

                    <button class="red">RED</button>
                    <button class="blue">BLUE</button>
                    <button class="black">BLACK</button>
                    <button class="gray">GRAY</button>
                    <button class="purple">PURPLE</button>

                    <label>QUANTITY :</label>

                    <button class="buttonplus">+</button>
                    <button class="buttonmoins">-</button>

                    <p class="message"></p>

                    <a href="" class="shopnow">SHOP NOW</a>

                    <br><br>

                    <a href="">COPY INVITATION LINK</a>

                </section>

                <a href="index.php">BACK TO PRODUCTS</a>


            <?php } else { ?>

                <h2>PRODUCT NOT FOUND</h2>

                <a href="index.php">BACK TO HOME</a>

            <?php } ?>


        <?php } else { ?>


            <?php foreach ($products as $product) { ?>

                <section id="card">

                    <h3>
                        <?= $product["category"] . " " . $product["name"] ?>
                    </h3>

                    <img src="<?= $product["image"] ?>" alt="">

                    <p>COLOR :</p>

                    <button class="red">RED</button>
                    <button class="blue">BLUE</button>
                    <button class="black">BLACK</button>
                    <button class="gray">GRAY</button>
                    <button class="purple">PURPLE</button>

                    <label>QUANTITY :</label>

                    <button class="buttonplus">+</button>
                    <button class="buttonmoins">-</button>

                    <p class="message"></p>

                    <a href="index.php?id=<?= $product["id"] ?>" class="shopnow">
                        SHOP NOW
                    </a>

                    <br><br>

                    <a href="">COPY INVITATION LINK</a>

                </section>

            <?php } ?>


        <?php } ?>


    </main>


    <script src="index.js"></script>

</body>
</html>