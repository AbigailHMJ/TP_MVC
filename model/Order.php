<?php

// Classe des commandes
class Order{
    private int $id;
    private int $user_id;
    private float $created_at;
    private float $total;

    // Méthode pour l'id de la commande
    public function getOrderID(): int {
        return $this->id;
    }

    public function setOrderID(int $id): void{
        $this->id = $id;
    }

    // Méthode pour l'id de l'utilisateur
    public function getUserID(): int {
        return $this->user_id;
    }

    public function setUserID(int $user_id): void{
        $this->user_id = $user_id;
    }


    // Méthode pour la date de création de la commande
    public function getOrderDate(): float{
        return $this->created_at;
    }

    public function setOrderDate(float $created_at): void{
        $this->created_at = $created_at;
    }


    // Méthode pour le total de la commande
    public function getTotal(): float{
        return $this->total;
    }

    public function setTotal(float $total): void{
        $this->total = $total;
    }
}