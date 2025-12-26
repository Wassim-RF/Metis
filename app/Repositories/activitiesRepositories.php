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
            $stmt->execute([
                'description' => $activite->getDescription(),
                'project_id' => $activite->getProjectId()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $activite->setId($id);
            return $activite;
        } 
        public function findAll() {
            $sql = "SELECT * FROM activities";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $activities[] = new Activite(
                    $row['description'],
                    $row['description']
                );
            }
            return $activities;
        }
        public function update(Activite $activite): bool {
            $sql = "UPDATE activities SET description = :description , project_id = :project_id WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'description'   => $activite->getDescription(),
                'project_id' => $activite->getProjectId(),
                'id' => $activite->getId()
            ]);
        }

        public function delete(int $id): bool {
            $sql = "DELETE FROM activities WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute(['id' => $id]);
        }
    }