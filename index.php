<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     require_once "function.php";
     require_once "data.php";
     if(isset($_GET["id"])){
        $id=$_GET["id"];
        $selected_article=getarticles($articles, $id);
        if($selected_article!== null){
            ?>
            <h2><?= $selected_article["title"]; ?></h2>
            <p><?= $selected_article["text"] ?></p>
            <?php
        }
        
     }
     else{
        foreach($articles as $article):
            ?>
            <h2><?= $article["title"]; ?></h2>
            <p><?= $article["text"] ?></p>
            <a href="index.php?id=<?= $article["id"] ?>">More</a>
     <?php
     endforeach;
     }
    ?>
</body>
</html>