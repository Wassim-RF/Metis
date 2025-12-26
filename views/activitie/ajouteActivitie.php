<?php
    echo 
    "----------------------------------------------------------------------------------------------------------------\n";
    $aDescription = readline("Entrer le descripton d'activite: ");
    $aProjectID = readline("Entrer l'id du project cessioner au activitie: ");
    $activitieServises->createActivities($aDescription , $aProjectID);