<?php

class Product{
    private int $id;
    private string $name;
    private float $price;
    private string $description;
    private float $created_at;

    // GETTERS & SETTERS
    // Méthode pour l'id du produit
    public function getID(): int {
        return $this->id;
    }

    public function setID(int $id): void{
        $this->id = $id;
    }

    // Méthode pour le nom du produit
    public function getName(): string{
        return strtoupper($this->name);
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    // Méthode pour le prix du produit
    public function getPrice(): float{
        return $this->price;
    }

    public function setPrice(float $price): void{
        if($price > 0){
        $this->price = $price;
        }
        else{
            echo "Erreur : le prix ne peut pas être une valeur négative.";
        }
    }

    // Méthode pour la description
    public function getDescription(): string{
        return $this->description;
    }

    public function setDescription(string $description): void{
        $this->description = $description;
    }

    // Méthode pour la date de création
    public function getDate(): float{
        return $this->created_at;
    }

    public function setDate(float $created_at): void{
        $this->created_at = $created_at;
    }
}