<?php
$heros = [ ['nom' => 'Kent', 'prenom' => 'Clark', 'pseudo' => 'Superman', 'estVilain' => false],
           ['nom' => 'Wayne', 'prenom' => 'Bruce', 'pseudo' => 'Batman', 'estVilain' => false],
           ['nom' => 'Fleck', 'prenom' => 'Arthur', 'pseudo' => 'Joker', 'estVilain' => true]]

function afficherHero(){
    echo "<ol>";
foreach($heros as $hero)
{
    echo "<li>".$hero['prenom']." -> ".$hero['pseudo']."</li>";
}
echo "</ol>";
}




?>