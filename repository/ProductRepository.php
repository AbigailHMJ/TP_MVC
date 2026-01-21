<?php

require_once __DIR__ . '/../model/Product.php';

class ProductRepository{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

     /**
     * @return Product[]
     */
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM products");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert(Product $product): void {
        $sql = "INSERT INTO produits (name, price) VALUES (:name, :price)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            // 'description' => $product->getDescription()
        ]);
    }

    public function findById(int $id): ?Product {
        $stmt = $this->db->prepare("SELECT * FROM produits WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $stmt->execute(['id' => $id]);

        $product = $stmt->fetch();
        return $product ?: null;
    }

    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM produits WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

}