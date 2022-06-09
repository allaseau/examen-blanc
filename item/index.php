<?php 

require ('../liste_stagiaires.php');

$id = null;
$stagiaire = null;

if (isset($_GET['id'])){
    $id = $_GET['id'];

    if(isset($stagiaires[$id])){
        $stagiaire = $stagiaires[$id];
    }
}
require('./view.php');
