<h2>Page produit</h2>
<div class="row">
    <div class="col-md-6">
        <img src="images/<?= $product['image'] ?>" alt="image de <?= $product['name'] ?>" class='img-fluid'>
    </div>
    <div class="col-md-6">
        <h1 class='fw-bold'><?= $product['name'] ?></h1>
        <div><?= $product['price'] ?>€</div>
        <div><?= nl2br($product['description']) ?></div>
    </div>
</div>