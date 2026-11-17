<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images.png">
    <link rel="stylesheet" href="students-template.css">
</head>
<body>
    <header class="header">
        <h1>Web dev results</h1>
        <cite>Sale 5</cite>
    </header>
    
    <table>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Note</th>
            <th>Status</th>
            <th>Result</th>        
          </tr>
          <?php foreach($students as $student): ?>
          <tr>
            <td><?= $student["id"] ?></td>
            <td><?= $student["name"] ?></td>
            <td><?= $student["age"] ?></td>
            <td><?= $student["note"] ?></td>
            <td><?= $student["status"] ?></td>
            <?php if($student["note"]>=10){?>
            <td><?= "admis" ?></td>
            <?php }else if($student["note"]<10 && strcasecmp($student["status"],"inactive")){ ?>
            <td><?= "compte désactivé" ?></td>
            <?php }else{?>
            <td><?= "Non admis" ?></td>
            <?php } ?>    
          </tr>
        <?php endforeach ?>
</table>
</body>
</html>