<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses.soli</title>
</head>
<body>
    <header class="header">
        <h1>Solicode academy</h1>
        <cite>programation courses</cite>
    </header>
    <nav class="nav">
        <h2>Available Courses :</h2>
        <?php foreach($courses as $course): ?>
        <a href="courses.php?id=<?=$course["id"]?>"><?= htmlspecialchars($course["title"]) ?></a><br>
        <?php endforeach ?>
    </nav>
    
</body>
</html>