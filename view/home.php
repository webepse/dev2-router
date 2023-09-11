<h1>Home</h1>
<h4>Nos produits</h4>
<?php
    while($don = $products->fetch())
    {
        echo "<div class='card col-3 m-3'>";
            echo "<img src='images/".$don['image']."' alt='image de ".$don['name']."' class='img-fluid' alt=''>";
            echo "<div class='card-body'>";
                echo "<h5><a href='product.php?id=".$don['id']."'>".$don['name']."</a></h5>";
                echo "<p class='card-text'>".$don['description']."</p>";
            echo "</div>";
        echo "</div>";    
    }
    $products->closeCursor();
?>