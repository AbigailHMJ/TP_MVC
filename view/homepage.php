<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="/public/javascript/script.js" defer></script>
    <title>Fika - TP</title>
</head>
<body>
   <header>
    <h1>fika</h1>
    <subtitle class="subtitle">épicerie suédoise</subtitle>
   </header>
   <main>
    <section class="products-display">
        <?php 
        foreach ($products as $product): ?>
        <div class="card-product">
            <?= $product->getName(); ?><br>
            <?= $product->getPrice(); ?>€<br>
            <a href="?page=Product&id=<?= $product->getId() ?>">+ d'infos</a>
        </div>
        <?php endforeach; ?>
    </section>
   </main>
   <footer></footer>
</body>
</html>