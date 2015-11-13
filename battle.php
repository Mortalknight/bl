<?php
    require_once('includes.php');
    require_once('classes/champion.php');
    require_once('classes/damageTabel.php');
    require_once('classes/event.php');
    require_once('classes/user_input.php');
    require_once('classes/spells.php');
    require_once('classes/JSON.php');



$b =  new user_input();
$p = $database->get("battle_champion", "*", [
            "id" => 1
        ]);
$b->setPlayersActiveChampions($p);
?>