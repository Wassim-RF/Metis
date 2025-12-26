<?php
    echo 
    "----------------------------------------------------------------------------------------------------------------\n" ;
    $projectDID = readline("Entrer l'ID du membre que tu veux supprimer: ");
    $projectServises->deleteProject((int) $projectDID);