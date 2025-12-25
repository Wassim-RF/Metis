<?php
    $n = 1;
    $members = $memberServices->showAllMember();
    if (!$members) {
        echo "Vous n'avez aucune membre.\n";
    }
    foreach ($members as $member) {
        echo "Member " . $n . "\n";
        echo "- ID : {$member['id']}.\n";
        echo "- NAME : {$member['name']}.\n";
        echo "- Email : {$member['email']}.\n";
        $n++;
    }