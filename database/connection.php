<?php

class Member {
    private ?int $id = null;
    private string $name;
    private string $email;

    public function __construct(string $name, string $email) {
        $this->name  = $name;
        $this->email = $email;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }
    public function getId(): ?int {
        return $this->id;
    }
    public function getMember(): array {
        return [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email
        ];
    }
    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }
}