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
        $this->msg->delete();
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        $this->response->redirect('/message');
    }
}
