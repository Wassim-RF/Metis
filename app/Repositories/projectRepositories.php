<?php
    namespace App\Repositories;

    use App\Classes\Project;
    use App\Classes\ProjetCourt;
    use App\Classes\ProjetLong;
    use Database\DataBase;
    use PDO;

    class ProjectRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }
        public function addProject(Project $projet) {
            $sql = "INSERT INTO projects (title, type, budget, member_id) VALUES (:title, :type, :budget, :member_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':title'     => $projet->getTitre(),
                ':type'      => $projet->getType(),
                ':budget'    => $projet->getBudget(),
                ':member_id' => $projet->getMemberId()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $projet->setId($id);
            return $projet;
        }

        public function deleteProject(int $id) {
            $sql = "DELETE FROM projects WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(['id' => $id]);
        } 
        public function affichezToutProject() {
            $sql = "SELECT p.* , m.name as memberName FROM projects p JOIN members m on p.member_id = m.id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }