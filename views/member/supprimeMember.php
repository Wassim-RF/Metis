<?php
    echo
    "----------------------------------------------------------------------------------------------------------------\n" ;
    $memberSID = readline("Entrer l'ID du membre que tu veux supprimer: ");
    $memberServices->deleteMember((int) $memberSID);