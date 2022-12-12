<?php

$products = [
    $dog_product_1 = new Product('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fthumbs.dreamstime.com%2Fb%2Fosso-per-un-cane-9301678.jpg&f=1&nofb=1&ipt=bfbbb36b517d61cad983815c009ec69285ee427060ac75951e443f792ca84f4d&ipo=images', 'osso1', '3 €', new Category('dog', '<i class="fa-solid fa-dog"></i>'), new ProductType('cibo')),
    $dog_product_2 = new Product('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fthumbs.dreamstime.com%2Fb%2Fosso-per-il-cane-29456463.jpg&f=1&nofb=1&ipt=3b15cd6db0f897d78ba962823e5d9c48666af7fed4aa895ffc2ce0e49fc609dc&ipo=images', 'osso2', '4 €', new Category('dog', '<i class="fa-solid fa-dog"></i>'), new ProductType('cibo')),
    $cat_product_1 = new Product('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flittlemisscat.com%2Fwp-content%2Fuploads%2F2018%2F09%2FCat-with-ball-of-wool-760x507.jpg&f=1&nofb=1&ipt=7c7880d735c6e467cb6373d2ff0d62466f3c70130a0a03f200c1435725e7a360&ipo=images', 'gioco 1', '10 €', new Category('cat', '<i class="fa-solid fa-cat"></i>'), new ProductType('gioco')),
    $cat_product_2 = new Product('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcattime.com%2Fassets%2Fuploads%2F2018%2F02%2FCat_Playing_With_Cat_Toys_5.jpg&f=1&nofb=1&ipt=f63a7647194540c083e6961b12b438c8bfddac5ea3d764fb6f48d28397e05f57&ipo=images', 'gioco2', '5 €', new Category('cat', '<i class="fa-solid fa-cat"></i>'), new ProductType('gioco'))
];
