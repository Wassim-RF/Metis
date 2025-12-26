<?php
    require 'config.php';

    do {
        require 'views/menu.php';
        switch ($choix) {
            case 1:
                require 'views/member/menuP.php';
                switch ($mChoix) {
                    case 1:
                        require 'views/member/ajouteMembre.php';
                        break;
                    case 2:
                        require 'views/member/modfierMember.php';
                        break;
                    case 3:
                        require 'views/member/supprimeMember.php';
                    case 4:
                        require 'views/member/afficherToutMember.php';
                    default:
                        echo "Votre choix n'existe pas.\n";
                        break;
                }
                break;

            case 2:
                require 'views/project/menuP.php';
                switch ($pChoix) {
                    case 1:
                        require 'views/project/ajouteProject.php';
                        break;
                }
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