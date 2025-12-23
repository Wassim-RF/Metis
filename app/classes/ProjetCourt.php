<?php
    namespace App\Classes;

    use DateTime;

    class ProjetCourt extends Project {
        public function getType() {
            return 'Court';
        }
    }