<?php

require_once __DIR__ . '/controller/ProductController.php';

$page = $_GET['page'] ?? 'homepage';

switch ($page) {

    case 'product': 
        $controller = new ProductController();
        $controller->displayProduct();
        break;
    
    case 'homepage':
    default:
         case 'home':
        $controller = new ProductController();
        $controller->index();
        break;

}

?>
