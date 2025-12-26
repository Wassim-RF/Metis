<?php
    namespace App\Classes;

    use DateTime;

    abstract class Project {
        protected ?int $id = null;
        protected string $titre;
        protected float $budget;
        protected int $member_id;
        protected DateTime $creationDate;

        public function __construct(string $titre, float $budget, int $member_id) {
            $this->titre = $titre;
            $this->budget = $budget;
            $this->member_id = $member_id;
            $this->creationDate = new DateTime();
        }
        public function getId() {
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getTitre() {
            return $this->titre;
        }
        public function getBudget() {
            return $this->budget;
        }
        public function getMemberId() {
            return $this->member_id;
        }
        abstract public function getType();
    }