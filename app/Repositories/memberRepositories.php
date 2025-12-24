<?php
    namespace App\Repositories;

    use App\Classes\Member;
    use Database\DataBase;
    use PDO;

    class MemberRepositories {
        private PDO $pdo;
        
        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }

        public function createMember(Member $member) {
            $sql = "INSERT INTO members (name , email) VALUES (:name , :email)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'name' => $member->getName(),
                'email' => $member->getEmail()
            ]);
        }

        public function findAll() {
            $sql = "SELECT * FROM members";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $membres[] = new Member(
                    $row['name'],
                    $row['email']
                );
            }
            return $membres;
        }

        public function update(Member $member): bool {
            $sql = "UPDATE membres SET nom = :nom, email = :email WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'nom'   => $member->getName(),
                'email' => $member->getEmail(),
                'id'    => $member->getId()
            ]);
        }

        public function delete(int $id): bool {
            $sql = "DELETE FROM membres WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute(['id' => $id]);
        }
    }