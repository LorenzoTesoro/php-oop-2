<?php

$products = [
    $dog_product_1 = new DogProduct('...', 'osso1', '3 €', new Category('dog', 'dog_icon'), new ProductType('cibo')),
    $dog_product_2 = new DogProduct('...', 'osso2', '4 €', new Category('dog', 'dog_icon'), new ProductType('cibo')),
    $cat_product_1 = new CatProduct('...', 'sabbietta', '10 €', new Category('cat', 'cat_icon'), new ProductType('igiene')),
    $cat_product_2 = new CatProduct('...', 'gioco per gatti', '5 €', new Category('cat', 'cat_icon'), new ProductType('gioco'))
];
