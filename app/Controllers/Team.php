<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeamModel;

class Team extends BaseController
{
    private $msg;
    public function __construct()
    {
        $this->msg = new TeamModel();
    }
    public function index()
    {
        $data['msg']=$this->msg->findall();
        return view('team/teamlist',$data);
    }
    public function create(){
        return view('team/teamadd');
    }
    public function store(){
        $data = [
            'name'=> $this->request->getVar('name'),
            'designation'=> $this->request->getVar('designation'),
            'description'=> $this->request->getVar('description')
        ];
        //print_r($data);

        $rules = [
            
            'name' => 'required|max_length[30]|min_length[3]',
            'designation' => 'required|max_length[30]|min_length[3]',
            'description' => 'required|max_length[50]|min_length[5]',
        ];

        if(! $this->validate($rules)){
            return redirect('teamadd');
        }else{
            $this->msg->insert($data);

            $session = session();
            $session->setFlashdata('msg', 'Inserted and uploaded Successfully');
            $this->response->redirect('/team');
        }
        
    }
    public function edit($id){
        $data = $this->msg->find($id);
        // print_r($data);
        // echo $id;
        return view('team/editteam',$data); 
        //return view('category/editform');
    }
    public function upload($id){

        $data = [
            'name'=> $this->request->getVar("name"),
            'designation'=> $this->request->getVar("designation"),
            'description'=> $this->request->getVar("description"),
    ];
    print_r($data);
        if($data){
            $this->msg->update($id, $data);
            $session = session(); 
            $session->setFlashdata('msg', 'Category Successfully Updated');
            $this->response->redirect('/team');
        } else{
            return redirect('team/editteam');
        }
        
    }
    public function delete($p_id)
    {
        $this->msg->where('id', $p_id);
        $this->msg->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/team');
    }
}
