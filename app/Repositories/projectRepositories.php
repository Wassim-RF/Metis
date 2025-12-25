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
        public function createProject(Project $project) {
            $sql = "INSERT INTO projects (title , duration , budget , member_id , type) VALUES (:title , :duration , :budget , :member_id , :type)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'title' => $project->getTitle(),
                'duration' => $project->getDuration(),
                'budget' => $project->getBudget(),
                'member_id' => $project->getMemberId(),
                'type' => $project->getType()
            ]);
        }
        public function findAll() {
            $sql = "SELECT * FROM projects";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $projects[] = new Project(
                    $row['title'],
                    $row['type'],
                    $row['duration'],
                    $row['budget'],
                    $row['member_id']
                );
            }
            return $projects;
        }
        public function update(Project $project): bool {
            $sql = "UPDATE projects SET title = :title , duration = :duration , budget = :budget , member_id = :member_id , type = :type WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'title'   => $project->getTitle(),
                'duration' => $project->getDuration(),
                'budget' => $project->getBudget(),
                'member_id' => $project->getMemberId(),
                'type' => $project->getType(),
                'id' => $project->getId()
            ]);
        }

        public function delete(int $id): bool {
            $sql = "DELETE FROM projects WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute(['id' => $id]);
        }
    }