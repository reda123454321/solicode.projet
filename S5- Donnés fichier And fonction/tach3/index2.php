<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "tach3/data2.php" ;
          require_once "function2.php";
          foreach($articles as $article):
           echo getarticles($article);
    ?>
    <?php endforeach; ?>

</body>
</html>