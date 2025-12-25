<?php
    namespace App\Repositories;

    use App\Classes\Activite;
    use Database\DataBase;
    use PDO;

    class ActivitiesRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }
        public function createActivitie(Activite $activite) {
            $sql = "INSERT INTO activities (description , project_id) VALUES (:description , :project_id)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'description' => $activite->getDescription(),
                'project_id' => $activite->getProjectId()
            ]);
        }
    }