<?php
    namespace App\Services;

    use App\Classes\Activite;
    use App\Repositories\ActivitiesRepositories;
    use PDO;

    class ActivitieServices {
        private ActivitiesRepositories $activitiesRepositories;
        
        public function __construct(ActivitiesRepositories $activitiesRepositories) {
            $this->activitiesRepositories = $activitiesRepositories;
        }
        public function createActivities(string $description , int $project_id) {
            $activitie = new Activite($description , $project_id);
            return $this->activitiesRepositories->createActivitie($activitie);
        }
    }