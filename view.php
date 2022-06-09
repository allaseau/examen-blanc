<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Blanc</title>
</head>
<body>
    <ul><!-- exercice 1 -->
    <?php foreach ($stagiaires as $key => $s) :?>
        <li><a href="./item?id=<?= $key ?>"> <!-- exercice 3 juste ajoute le a et le key -->
            <?= $s['sexe'] ==='M' ? 'Mr' : 'Mme'?>
            <?= strtoupper($s['nom'])?>
            <?= ucfirst($s['prenom']);?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>