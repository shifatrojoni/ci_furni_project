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
        $this->products->join('category', 'category.id = products.category_id');
        $data['items'] = $this->products->findAll();
        $data['title'] = "Display all products";

        // print_r($data);
        return view('products/index', $data);
    }

    public function create(){
        $data['cats'] = $this->category->findAll();
        return view('products/create',$data);
    }

    public function edit($id){
        //echo $id;
        $data = $this->products->find($id);
        print_r($data);
        return view('products/edit', $data);

    }


    public function update($id){
        // $this->products = new ProductModel(); 
        $data = [
            'product' => $this->request->getPost('product'),
            'category' => $this->request->getPost('category'),
            'model' => $this->request->getPost('model'),
            'price' => $this->request->getPost('price'),
            'sku' => $this->request->getPost('sku'),
        ];
        $this->products->update($id, $data);
        $this->response->redirect('/products');
        $session = session();
        $session->setFlashdata('msg', 'Update Successfully');
    }



    public function delete($id){
        //echo $id;
        $this->products->where('product_id', $id);
        $this->products->delete();
        //return redirect("products");
        $this->response->redirect('/products');
        $session = session();
        $session->setFlashdata('msg', 'Deleted Successfully');
    }

    public function store(){
        // return $this->request->getVar('product');
        $data = [
            
            'category_id' => $this->request->getVar('category'),
            'model' => $this->request->getVar('model'),
            'price' => $this->request->getVar('price'),
            'sku' => $this->request->getVar('sku'),
            'product' => $this->request->getVar('product'),
            //'photo' => $this->request->getFile('photo')->getName(),
        ];

        print_r($data);


        $rules = [
            'product' => 'required|max_length[30]|min_length[3]',
            'price' => 'required|numeric',
            'sku' => 'required|min_length[3]',
            // 'photo' => 'uploaded[photo]|max_size[photo,102400]|ext_in[photo,jpg,jpeg,png]'
        ];

        if(!  $this->validate($rules)){
            return view('products/create');
        }else{
            // $img = $this->request->getFile('photo');
            // $img->move(WRITEPATH . 'uploads');
            $this->products->insert($data);
            $session = session();
            $session->setFlashdata('msg', 'Inserted Successfully');
            $this->response->redirect('/products');
        }

        // if($data){
        //     $this->products->insert($data);
        //     $session = session();
        //     $session->setFlashdata('msg', 'Inserted Successfully');
        //     $this->response->redirect('/products');
        // }



    }
}