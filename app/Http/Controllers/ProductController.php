<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        $products = ["produtos 01", "produtos 02", "produtos 03"];

        return $products;
    }

    public function show($id)
    {
        return "o id do produto é: {$id}";
    }
}
