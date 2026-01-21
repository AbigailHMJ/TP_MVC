<?php

require_once __DIR__ . '/controller/ProductController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {

    case 'produits':
        $controller = new ProductController();
        $controller->index();
        break;

    case 'product':
        $controller = new ProductController();
        $controller->show((int)($_GET['id'] ?? 0));
        break;

    case 'home':
    default:
        echo "<h1>fika</h1>";
        echo "<subtitle>épicerie suédoise</subtitle><br>";
        echo "<a href='?page=produits'>Nos produits</a>";
        break;
}
