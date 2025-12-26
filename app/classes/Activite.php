<?php 
    namespace App\Classes;

    use DateTime;

    class Activite {
        private ?int $id = null;
        private string $description;
        private int $project_id;

        public function __construct(string $description , int $project_id) {
            $this->description = $description;
            $this->project_id = $project_id;
        }
        public function getId() {
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getDescription() {
            return $this->description;
        }
        public function setDescription(string $description) {
            $this->description = $description;
        }
        public function getProjectId() {
            return $this->project_id;
        }
        public function setPrjectId(int $project_id) {
            $this->project_id = $project_id;
        } 
    }