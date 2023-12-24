<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
        return view('customer/customerlist');
    }
    public function create(){
        return view('customer/customeradd');
    }
    public function store(){
        
    }
    public function edit($id){
        return view('customer/editcustomer');
    }
    public function upload($id){
        
    }
    public function delete($id){
    }
}
