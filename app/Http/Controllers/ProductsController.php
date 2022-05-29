<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $products = [
        1 => "Samsung Galaxy Note 8",
        2 => "Macbook",
        3 => "Asus Computer"
    ];

    public function index() {
        return view('products.index', [
            'products' => $this->products
        ]);
    }

    public function show($id) {
        return view("products.show", [
            'product' => $this->products[$id] ?? "Product with id '$id' doesn't exist!"
        ]);
    }

    public function edit() {
        return view("products.edit");
    }
}
