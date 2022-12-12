<?php

require_once __DIR__ . '/Product.php';


class DogProduct extends Product
{
    protected $category;
    protected $type;

    public function __construct($image, $name, $price, Category $category, ProductType $type)
    {
        parent::__construct($image, $name, $price);
        $this->category = $category;
        $this->type = $type;
    }
}
