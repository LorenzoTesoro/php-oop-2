<?php
/* 
BONUS (Opzionale):
1. Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
2. Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.

   1: 
    - creo una classe per lo User - x i clienti in generale
    - extends class for registered user - x il cliente registrato 
    - nella classe registered_user creo una funzione che setta lo sconto del 20 % - function set_sconto / get_sconto
    -  
*/

require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/RegisteredUser.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/ProductType.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/db.php';


$user_1 = new Registered_user('lorenzo', 26, 'not registered user');
var_dump($user_1);

$user_1->set_discount('not registered');

var_dump($user_1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
        .row {
            flex-wrap: wrap;
        }
    </style>
</head>

<body class="bg-dark text-light">

    <h1 class="text-center mt-4 mb-4">Products</h1>

    <div class="container pt-3">
        <div class="row row-cols-4 gy-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card p-2 bg-primary">
                        <img class="card-img-top" src="<?php echo $product->image ?>" alt="<?php echo $product->image ?>">
                        <div class="card-body">
                            <h4 class="card-title">Name: <?php echo $product->name ?></h4>
                            <p class="card-text">Price: <?php echo $product->price ?></p>
                            <p class="card-text">Category: <?php echo $product->category->icon ?></p>
                            <p class="card-text">Type: <?php echo $product->type->type ?></p>
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