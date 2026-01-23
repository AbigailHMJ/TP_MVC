<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<?php include('./view/layout/header.php');?>

<body>
    
    <main>
        <div class="products-display">
            <?php
            foreach ($products as $product): ?>
                <div class="product-card">
                    <h4 class="card-product-title"><?= $product->getName() ?></h4>
                   <p class="card-product-price"><?= $product->getPrice() ?>€</p>
                    <a href="?page=product&id=<?= $product->getId() ?>">voir plus</a>
                    <button class="card-add" type="button">Ajouter au panier</button>
            </div>
            <?php endforeach; ?>
            </div>
    </main>

    <?php include('./view/layout/footer.php'); ?>
    
</body>

</html>