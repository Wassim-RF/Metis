<?php
    namespace App\Services;

    use App\Repositories\ProjectRepositories;
    use App\Classes\Project;
    use App\Classes\ProjetCourt;
    use App\Classes\ProjetLong;
    use Database\DataBase;
    use PDO;

    class ProjectServices {
        private ProjectRepositories $projectRepositories ;

        public function __construct(ProjectRepositories $projectRepositories) {
            $this->projectRepositories = $projectRepositories;
        }
        public function createProject(string $titre, float $budget, int $member_id , string $type) {
            if ($type === 'court') {
                $project = new ProjetCourt($titre , $budget , $member_id);
            } else if ($type === 'long') {
                $project = new ProjetLong($titre , $budget , $member_id);
            } else {
                echo "Type de projet invalide";
            }

            return $this->projectRepositories->addProject($project);
        }

        public function deleteProject(int $id){
            $this->projectRepositories->deleteProject($id);
        }

        public function showAllProject() {
            return $this->projectRepositories->affichezToutProject();
        }
    }