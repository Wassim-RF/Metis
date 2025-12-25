<?php
    namespace App\Classes;
    
class Member {
    private ?int $id = null;
    private string $name;
    private string $email;

    public function __construct(string $name, string $email) {
        $this->setName($name);
        $this->setEmail($email);
    }
    public function setId(int $id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function getMember() {
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email
        ];
    }
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        if (empty($name)) {
            echo "Le nom est obligatoir.\n";
        }
        $this->name = $name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail(string $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Entrer un email valider.\n";
        }
    }
}