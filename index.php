<?php
do {
    require 'views/menu.php';
    switch ($choix) {
        case 1:
            require 'views/member/menuP.php';
            switch ($mChoix) {
                case 1:
                    require 'views/member/ajouteMembre.php';
                    break;
                default:
                    echo "Votre choix n'existe pas.\n";
                    break;
            }
            break;

        case 2:
            echo 2 . "\n";
            break;

        case 3:
            echo 3 . "\n";
            break;

        case 0:
            echo "Bye";
            break;
        default:
            echo "Votre choix n'existe pas.\n";
            break;
    }

} while ($choix != 0);
