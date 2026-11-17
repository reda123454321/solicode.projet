<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aticles.solic</title>
    <link rel="icon" href="images.png">
</head>
<body>
    <header class="header">
        <h1>Personnal blog</h1>
        <cite>welcome to my blog</cite>
    </header>
    <section class="section">
        <h3>Explorer par thème</h3>
        <a href="">Tous les articles</a><br><hr>
        <?php foreach($categories as $category): ?>
            <a href="index.php?youssef=<?= $category["id"] ?>"><?= htmlspecialchars($category["libelle"]) ?></a><br>
             <?php endforeach ?>
    </section>
   
</body>
</html>