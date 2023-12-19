<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function index()
    {
        return view('category/categorylist');
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
