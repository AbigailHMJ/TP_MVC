<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fika - Détails produit</title>
</head>

<body>
    <?php include('./view/layout/header.php');?>

    <?php if (!$product): ?>
    <h2>Produit introuvable</h2>
    <a href="?page=products">Retour</a>
    <?php else: ?>
    <h2 class="product-title"><?= $product->getName() ?></h2>
    <p class="product-price"><?= $product->getPrice() ?> €</p>
    <p class="product-description"><?= $product->getDescription() ?></p>
    <button class="product-add" type="button">Ajouter au panier</button>
    <?php endif; ?>

    <?php include('./view/layout/footer.php'); ?>
</body>

</html>