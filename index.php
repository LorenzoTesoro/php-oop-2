<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    1. L'e-commerce vende prodotti per animali. - create product class
    2. I prodotti sono categorizzati, le categorie sono Cani o Gatti. - create category class
    3. I prodotti saranno oltre al cibo, anche giochi, cucce, etc. - create productype class
Print: Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). - db for products

    4. Card (img, title, price, category_icon, type);

*/

/* Classes:
    - Product
    - Category
    - TypeOfProduct
*/

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/ProductType.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/DogProduct.php';
require __DIR__ . '/Models/CatProduct.php';
require __DIR__ . '/db.php';


/* $dog_product_1 = new DogProduct('...', 'osso1', '3 €', new Category('dog', 'dog_icon'), new ProductType('cibo'));

var_dump($dog_product_1); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center">Products</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $product->image ?>" alt="<?php echo $product->image ?>">
                        <div class="card-body">
                            <h4 class="card-title">Name: <?php echo $product->name ?></h4>
                            <p class="card-text">Price: <?php echo $product->price ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>