<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition stagiaire</title>
</head>
<body> <!-- exercice 4 -->
    <form action="" enctype="multipart/form-data" method="POST">
        <div>
            <label>
                Nom
                <input type="text" name="nom" value="<?=$stagiaire['nom']?>">
            </label>
        </div>
        <div>
            <label>
                Prenom
                <input type="text" name="prenom" value="<?=$stagiaire['prenom']?>">
            </label>
        </div>
        <div>
            <label>
                Date de naissance
                <?php 
                    $date_array = date_parse_from_format('d/m/Y', $stagiaire['ddn']);
                ?>
                <input type="number" name="jour" value="<?=$date_array['day']?>">
                    <select>
                        <?php foreach(range(1, 12) as $currentmonth) :?>
                        <option value="<?=$currentmonth?>" <?= $date_array['month'] === $currentmonth ? 'selected' : ''?>><?=$currentmonth?></option>
                        <?php endforeach ?>
                    </select>
                <input type="number" name="année" value="<?=$date_array['year']?>">
            </label>
        </div>
        <div>
            Sexe
            <input type="radio" name="sexe" value="M" <?= $stagiaire['sexe'] === 'M' ? 'checked' : ''?>> Mr
            <input type="radio" name="sexe" value="F" <?= $stagiaire['sexe'] === 'F' ? 'checked' : ''?>> Mme
        </div>
        <div>
            <label>
                Enfants
                <input type="number" name="enfants" value="<?= $stagiaire['enfants']?>">
            </label>
        </div>
        <div>
            Hobbies
            <?php foreach($hobbies as $key => $value) :?>
                <label>
                <input type="checkbox" name="hobbies[]" value="<?= $key ?>" <?= in_array($key, $stagiaire['hobbies']) ? 'checked' : ''?> /> <?= $value ?>
                </label>
            <?php endforeach ?>
        </div> 
        <input type="submit" name="sauver" value="sauver">    
    </form>
</body>
</html>