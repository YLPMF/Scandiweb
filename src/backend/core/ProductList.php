<?php

class ProductList
{

    public static function index(): void
    {        
        include './src/frontend/index.html';
    }

    public static function show(): void
    {
        echo response((new Product)->getAll());
    }

    public static function add(array $inputs): void 
    {
        $validator = new Validator($inputs);
    }

};