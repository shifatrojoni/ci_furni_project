<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function index()
    {
        $data['product'] = $this->product->findAll();
       return view('product/productlist');
    }
    public function create(){
        return view('product/productadd');
    }
    public function store(){
        
    }
    public function edit($id){
        return view('product/editproduct');
    }
    public function upload($id){
        
    }
    public function delete($id){
        
    }

    }

