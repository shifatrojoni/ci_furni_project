<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;




class ProductController extends BaseController
{

    private $products ;
    private $category ;
    protected $helpers = ['form','url','file'];


    public function __construct()
    {
       $this->products = new ProductModel();
       $this->category = new CategoryModel();

    }

    public function index()
    {
        $data['product']=$this->products->findAll();
        return view('product/productlist',$data);
    }

}