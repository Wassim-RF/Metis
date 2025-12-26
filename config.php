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

    use App\Services\MemberServices;
    use App\Services\ProjectServices;
    use App\Classes\Member;
    use App\Repositories\MemberRepositories;
    use App\Repositories\ProjectRepositories;
    use PDO;
    use Exception;

    $memberRepo = new MemberRepositories();
    $projectRepo = new ProjectRepositories();
    $memberServices = new MemberServices($memberRepo);
    $projectServises = new ProjectServices($projectRepo);