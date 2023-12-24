<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MsgModel;

class Message extends BaseController
{
    private $msg;
    public function __construct()
    {
        $this->msg = new MsgModel();
    }
    public function index()
    {
        $data['msg']=$this->msg->findall();
        return view('message/messagelist',$data);
    }
    public function delete($p_id)
    {
        $this->msg->where('id', $p_id);
        $this->msg->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/message');
    }
    // public function delete($id){
    //     $this->category->delete($id);
    //     $session = session(); 
    //     $session->setFlashdata('msg', 'Category Successfully Deleted');   
    //     return $this->response->redirect('/categories/'); 
    // }
    

}
