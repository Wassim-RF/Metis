<?php
    echo 
    "----------------------------------------------------------------------------------------------------------------\n" ;
    $memeberMID = readline("Entrer l'ID du membre que tu veux modifier: ");
    $memberMName = readline("Entrer le nouvelle nom (ou l'ancien nom) : ");
    $memberMEmail = readline("Entrer le nouvelle email (ou l'ancien email) : ");
    try {
        $memberServices->modifierMember($memberMName , $memberMEmail , (int) $memeberMID);
    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }