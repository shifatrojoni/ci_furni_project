<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    private $category;
    public function __construct()
    {
        $this->category = new CategoryModel();
    }
    public function index()
    {
        $data['category'] = $this->category->findAll();
        return view('category/categorylist',$data);
    }
    public function create(){
        return view('category/categoryadd');
    }
    public function store(){
        
    }
    public function edit($id){
        return view('category/editform');
    }
    public function upload($id){
        
    }
    public function delete($id){
        
    }

}
