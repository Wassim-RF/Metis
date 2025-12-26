<?php
    $n = 1;
    $projects = $projectServises->showAllProject();
    if (!$projects) {
        echo "Vous n'avez aucune project.\n";
    }
    foreach ($projects as $project) {
        echo "Project " . $n . "\n";
        echo "- ID : {$project['id']}.\n";
        echo "- Titre : {$project['title']}.\n";
        echo "- Budget : {$project['budget']} MAD.\n";
        echo "- Cessioner du project : (id => {$project['member_id']}) , (name => {$project['memberName']}).\n";
        echo "- Type : {$project['type']}.\n";
        $n++;
    }