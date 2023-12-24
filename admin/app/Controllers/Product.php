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
       return view('product/productlist',$data);
    }
    public function create(){
        return view('product/productadd');
    }
    public function store(){
        $data = [
            'name'=> $this->request->getVar('name'),
            'description'=> $this->request->getVar('description'),
            'sku'=> $this->request->getVar('sku')
        ];
        //print_r($data);

        $rules = [
            
            'name' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[50]|min_length[5]',
            'sku' => 'required|max_length[50]|min_length[5]',
        ];

        if(! $this->validate($rules)){
            return redirect('productadd');
        }else{
            $this->product->insert($data);

            $session = session();
            $session->setFlashdata('msg', 'Inserted and uploaded Successfully');
            $this->response->redirect('/product');
        }
        
    }
    public function edit($id){
        $data = $this->product->find($id);
        // print_r($data);
        // echo $id;
        return view('product/editproduct',$data); 
        //return view('category/editform');
    }
    public function upload($id){
        $data = [
            'name'=> $this->request->getVar("name"),
            'description'=> $this->request->getVar("description"),
            'sku'=> $this->request->getVar("sku"),
    ];
    print_r($data);
        if($data){
            $this->product->update($id, $data);
            $session = session(); 
            $session->setFlashdata('msg', 'Product Successfully Updated');
            $this->response->redirect('/product');
        } else{
            return redirect('product/editproduct');
        }
        
        
    }
    public function delete($p_id){
        $this->product->where('id', $p_id);
        $this->product->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/product');
        
    }

    }

