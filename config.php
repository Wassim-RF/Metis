<?php
    require_once 'app/Repositories/MemberRepositories.php';
    require_once 'database/connection.php';
    require_once 'app/services/memberServices.php';
    require_once 'app/classes/Member.php';

    use App\Services\MemberServices;
    use App\Classes\Member;
    use App\Repositories\MemberRepositories;
    use PDO;
    use Exception;

    $memberRepo = new MemberRepositories();
    $memberServices = new MemberServices($memberRepo);