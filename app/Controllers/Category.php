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
        $data = [
            'name'=> $this->request->getVar('name'),
            'description'=> $this->request->getVar('description')
        ];
        //print_r($data);

        $rules = [
            
            'name' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[50]|min_length[5]',
        ];

        if(! $this->validate($rules)){
            return redirect('categoryadd');
        }else{
            $this->category->insert($data);

            $session = session();
            $session->setFlashdata('msg', 'Inserted and uploaded Successfully');
            $this->response->redirect('/category');
        }
        
    }
    public function edit($id){
        $data = $this->category->find($id);
        // print_r($data);
        echo $id;
        return view('category/editform',$data); 
        //return view('category/editform');
    }
    public function upload($id){

        $data = [
            'name'=> $this->request->getVar("name"),
            'description'=> $this->request->getVar("description"),
    ];
    print_r($data);
        if($data){
            $this->category->update($id, $data);
            $session = session(); 
            $session->setFlashdata('msg', 'Category Successfully Updated');
            $this->response->redirect('category');
        } else{
            return redirect('category/editform');
        }
        
    }
    public function delete($p_id){
        $this->category->where('id', $p_id);
        $this->category->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/category');
        
    }

}
