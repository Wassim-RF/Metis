<?php
    require_once 'app/Repositories/MemberRepositories.php';
    require_once 'database/connection.php';
    require_once 'app/services/memberServices.php';
    require_once 'app/classes/Member.php';
    require_once 'app/Repositories/projectRepositories.php';
    require_once 'app/services/projectServices.php';
    require_once 'app/classes/Project.php';
    require_once 'app/classes/ProjetCourt.php';
    require_once 'app/classes/ProjetLong.php';
    require_once 'app/classes/Activite.php';
    require_once 'app/Repositories/activitiesRepositories.php';
    require_once 'app/services/activitieServices.php';

    use App\Services\MemberServices;
    use App\Services\ProjectServices;
    use App\Services\ActivitieServices;
    use App\Repositories\MemberRepositories;
    use App\Repositories\ProjectRepositories;
    use App\Repositories\ActivitiesRepositories;

    $memberRepo = new MemberRepositories();
    $projectRepo = new ProjectRepositories();
    $activitieRepo = new ActivitiesRepositories();
    $memberServices = new MemberServices($memberRepo);
    $projectServises = new ProjectServices($projectRepo);
    $activitieServises = new ActivitieServices($activitieRepo);