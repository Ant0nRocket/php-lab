<?php

class Product
{
    // DB
    private $connection;
    private $table_name = "products";

    // Object
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $category_name;
    public $created;

    // Constructor
    public function __construct($connection)
    {
        $this->$connection = $connection;
    }
}
