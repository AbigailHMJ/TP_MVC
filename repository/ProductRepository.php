<?php

require_once __DIR__ . '/../model/Product.php';

class ProductRepository{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // public function getAll(): array{
    //     $stmt = $this->db->query("SELECT * FROM products");
    //     $products = [];
        
    //     while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //         $newProduct = new Product(
    //             $row['id'],
    //             $row['name'],
    //             $row['price']
    //         );
    //         $products[] = $newProduct;
    //     }
    //     return $products;
    // }

public function getAll(){
    $stmt = $this->db->query("SELECT * FROM products");
    $stmt->setFetchMode(PDO::FETCH_CLASS, "Product");
    $result = $stmt->fetchAll();
    return $result;
}

public function getById(int $id): ?Product{
    $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_CLASS, "Product");
    $stmt->execute(['id' => $id]);
}

}