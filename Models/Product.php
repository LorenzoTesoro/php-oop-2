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
    public $category;
    public $type;

    public function __construct($image, $name, $price, Category $category, ProductType $type)
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}
