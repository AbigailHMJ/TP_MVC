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
    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email): void{
        $this->email = $email;
    }

    // Méthode pour password
    public function getPassword(): string{
        return $this->password;
    }

    public function setPassword(string $password): void{
        $this->password = $password;
    }

    // Méthode pour role
    public function getRole(): string{
        return $this->role;
    }

    public function setRole(string $role): void{
        $this->role = $role;
    }

    // Méthode pour différencier les affichages
    abstract public function displayPage();
}

// class Admin extends User{
//     public function displayPage(){

//     };
// }

// class Member extends User{

// }