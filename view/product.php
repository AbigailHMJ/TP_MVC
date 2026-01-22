<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fika - Détails produit</title>
</head>

<body>
    <?php if (!$product): ?>
    <h1>Produit introuvable</h1>
    <a href="?page=produits">Retour</a>
    <?php else: ?>
    <h1><?= $product->getName() ?></h1>
    <p>Prix HT : <?= $product->getPrice() ?> €</p>
    <p><?= $product->getDescription() ?>
    <?php endif; ?>
</body>

</html>