<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Service extends BaseController
{
    private $msg;
    public function __construct()
    {
        $this->msg = new ServiceModel();
    }
    public function index()
    {
        $data['msg']=$this->msg->findall();
        return view('service/servicelist',$data);
    }
    public function create(){
        return view('service/serviceadd');
    }
    public function store(){
        $data = [
            'icon'=> $this->request->getVar('icon'),
            'name'=> $this->request->getVar('name'),
            'description'=> $this->request->getVar('description')
        ];
        //print_r($data);

        $rules = [
            
            'icon' => 'required|max_length[30]|min_length[3]',
            'name' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[50]|min_length[5]',
        ];

        if(! $this->validate($rules)){
            return redirect('serviceadd');
        }else{
            $this->msg->insert($data);

            $session = session();
            $session->setFlashdata('msg', 'Inserted and uploaded Successfully');
            $this->response->redirect('/service');
        }
        
    }
    public function edit($id){
        $data = $this->msg->find($id);
        // print_r($data);
        // echo $id;
        return view('service/editservice',$data); 
        //return view('category/editform');
    }
    public function upload($id){

        $data = [
            'icon'=> $this->request->getVar("icon"),
            'name'=> $this->request->getVar("name"),
            'description'=> $this->request->getVar("description"),
    ];
    print_r($data);
        if($data){
            $this->msg->update($id, $data);
            $session = session(); 
            $session->setFlashdata('msg', 'Category Successfully Updated');
            $this->response->redirect('/service');
        } else{
            return redirect('service/editservice');
        }
        
    }
    public function delete($p_id)
    {
        $this->msg->where('id', $p_id);
        $this->msg->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/service');
    }
}
