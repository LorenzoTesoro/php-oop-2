<?php

/* 
- immagine 
- titolo
- prezzo 
- icona della categoria
- tipo di articolo
*/

class Product
{
    public $image;
    public $name;
    public $price;
    public $category_icon;
    public $type;

    public function __construct($image, $name, $price, Category $category_icon, ProductType $type)
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->category_icon = $category_icon;
        $this->type = $type;
    }
}
