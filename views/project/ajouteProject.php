<?php
    echo 
    "----------------------------------------------------------------------------------------------------------------\n";
    $pTitle = readline("Entrer le titre du project: ");
    $pType = readline("Choisi le type du project (court , long): ");
    $pBudget = readline("Entrer la budget du project: ");
    $pMemberID = readline("Entrer l'id du membre qui cessioner le project: ");
    $projectServises->createProject($pTitle , $pBudget , (int) $pMemberID , $pType);