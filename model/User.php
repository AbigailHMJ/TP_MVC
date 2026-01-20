<?php

// Classe abstraite user
abstract class User{
    protected int $id;
    protected string $email;
    protected string $password;
    protected string $role;

    // Méthode pour id
    public function getUserID(): int {
        return $this->id;
    }

    public function setUserID(int $id): void{
        $this->id = $id;
    }

    // Méthode pour email

    
    // Méthode pour password
    // Méthode pour role
}