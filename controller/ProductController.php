<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Product.php';
require_once __DIR__ . '/../repository/ProductRepository.php';

class ProductController {
    public function index(): void{
        $pdo = getPDO();
        $manager = new ProductRepository($pdo);
        $products = $manager->findAll();
        require_once __DIR__ . '/../view/homepage.php';
    }

    public function show(int $id): void {
        $pdo = getPDO();
        $manager = new ProductRepository($pdo);
        $products = $manager->findById($id);
    }
}

