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
                    <?= $product->getName() ?><br>
                    <?= $product->getPrice() ?>€<br>
                    <a href="?page=product&id=<?= $product->getId() ?>">+ d'infos</a>
                    <button class="add" type="button">Ajouter au panier</button>
            </div>
            <?php endforeach; ?>
            </div>
    </main>

    <?php include('./view/layout/footer.php'); ?>
    
</body>

</html>