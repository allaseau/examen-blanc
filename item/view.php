<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercice 2 -->

    <?php if(!isset($id)) :?>
        <p>Veuillez fournir un id de stagiaire</p>
    <?php elseif(!isset($stagiaire)) :?>
        <p>Pas de stagiaire connu avec cet id</p>
    <?php else :?>
        <ul>
            <?php foreach($stagiaire['hobbies'] as $hobby) :?>
            <li><?= $hobbies[$hobby]?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</body>
</html>