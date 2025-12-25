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
            $stmt->execute([
                'name' => $member->getName(),
                'email' => $member->getEmail()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $member->setId($id);
            return $member;
        }

        public function findAll() {
            $sql = "SELECT * FROM members";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function findById(int $id) {
        $sql = "SELECT * FROM members WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $member = new Member(
            $row['name'],
            $row['email']
        );
        $member->setId($row['id']);
        return $member;
    }

        public function update(Member $member): bool {
            $sql = "UPDATE members SET name = :name, email = :email WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'name'   => $member->getName(),
                'email' => $member->getEmail(),
                'id'    => $member->getId()
            ]);
        }

        public function delete(int $id): bool {
            $sql = "DELETE FROM members WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute(['id' => $id]);
        }
        public function existeEmail(string $email) {
            $sql = "SELECT COUNT(*) FROM members WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email' => $email]);
            return $stmt->fetchColumn() > 0;
        }
    }