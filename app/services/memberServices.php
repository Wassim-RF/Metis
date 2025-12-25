<?php
    namespace App\Services;

    use App\Repositories\MemberRepositories;
    use App\Classes\Member;
    use Exception;

    class MemberServices {
        private MemberRepositories $memberRepositories;

        public function __construct(MemberRepositories $memberRepositories) {
            $this->memberRepositories = $memberRepositories;
        }

        public function ajouterMember(string $name, string $email) {
            if ($this->memberRepositories->existeEmail($email)) {
                throw new Exception("Email déjà utilisé");
            }
            $member = new Member($name, $email);
            return $this->memberRepositories->createMember($member);
        }
        public function modifierMember(string $name , string $email , int $id) {
            if ($this->memberRepositories->existeEmail($email)) {
                throw new Exception("Email déjà utilisé");
            }
            $member = $this->memberRepositories->findById($id);
            if(!$member) {
                echo "Le member n'existe pas.";
            }

            $member->setName($name);
            $member->setEmail($email);
            
            $this->memberRepositories->update($member);
        }

        public function deleteMember(int $id) {
            $this->memberRepositories->delete($id);
        }

        public function showAllMember() {
            return $this->memberRepositories->findAll();
        }
    }