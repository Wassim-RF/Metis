<?php

    class Project {
        private ?int $id = null;
        private string $titre;
        private DateTime $creationDate;
        private string $type;
        private string $duration;
        private float $budget;
        private int $member_id;

        public function __construct(string $titre , string $type , string $duration , float $budget , int $member_id) {
            $this->titre = $titre;
            $this->type = $type;
            $this->duration = $duration;
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
        public function getTitle() {
            return $this->titre;
        }
        public function setTitle(string $title) {
            $this->titre = $title;
        }
        public function getType() {
            return $this->type;
        }
        public function setType(string $type) {
            $this->type = $type;
        }
        public function getDuration() {
            return $this->duration;
        }
        public function setDuration(string $duration) {
            $this->type = $duration;
        }
        public function getBudget() {
            return $this->budget;
        }
        public function setBudget(string $budget) {
            $this->type = $budget;
        }
        public function getMemberId() {
            return $this->member_id;
        }
        public function setMemberId(string $member_id) {
            $this->type = $member_id;
        }
    }