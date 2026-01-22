<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../repository/ProductRepository.php';
require_once __DIR__ . '/../model/Product.php';

class ProductController
{

    public function index(): void
    {
        $pdo = getPDO();
        $repository = new ProductRepository($pdo);
        $products = $repository->getAll();
        require_once __DIR__ . '/../view/homepage.php';
    }

    // public function displayProduct(): void
    // {
    //     $pdo = getPDO();
    //     $id = (int)($_GET['id'] ?? 0);
    //     $repository = new ProductRepository($pdo);
    //     $product = $repository->getById($id);
    //     // require_once __DIR__ . '/../view/product_details.php';

    // }
}
