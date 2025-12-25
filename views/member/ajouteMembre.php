<?php
    echo 
    "----------------------------------------------------------------------------------------------------------------\n";
    $memberName = readline("Entre le nom du membre: ");
    $memberEmail = readline("Entrer l'email du membre: ");
    try {
        $memberServices->ajouterMember($memberName , $memberEmail);
    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }