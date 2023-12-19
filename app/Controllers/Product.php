<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
       
    
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

