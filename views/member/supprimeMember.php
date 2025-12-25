<?php
    echo
    "----------------------------------------------------------------------------------------------------------------\n" ;
    $memberSID = readline("Entrer l'ID du membre que tu veux suppeimer: ");
    $memberServices->deleteMember((int) $memberSID);