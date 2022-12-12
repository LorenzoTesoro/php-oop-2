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
    public $type;

    public function __construct($image, $name, $price, $type)
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
}
