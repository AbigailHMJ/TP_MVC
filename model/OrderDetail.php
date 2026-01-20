<?php

class OrderDetails{
    private int $id;
    private int $order_id;
    private int $product_id;
    private float $quantity;
    private float $unit_price;

    // Méthode pour l'id
    public function getDetailID(): int {
        return $this->id;
    }

    public function setDetailID(int $id): void{
        $this->id = $id;
    }

    // Méthode pour l'id de la commande
    public function getOrderID(): int {
        return $this->order_id;
    }

    public function setOrderID(int $order_id): void{
        $this->order_id = $order_id;
    }

    // Méthode pour l'id du produit
    public function getProductID(): int {
        return $this->product_id;
    }

    public function setProductID(int $product_id): void{
        $this->product_id = $product_id;
    }

    // Méthode pour la quantité du produit
    public function getQuantity(): float {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): void{
        $this->quantity = $quantity;
    }

    // Méthode pour le prix unitaire
    public function getUnitPrice(): float{
        return $this->unit_price;
    }

    public function setUnitPrice(float $unit_price): void{
        $this->unit_price = $unit_price;
    }
}