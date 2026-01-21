<?php

require_once __DIR__ . '/../model/Product.php';

class ProductRepository{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

     
}