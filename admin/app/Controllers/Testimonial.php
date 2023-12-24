<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestimonailModel;

class Testimonial extends BaseController
{
    private $msg;
    public function __construct()
    {
        $this->msg = new TestimonailModel();
    }
    public function index()
    {
        $data['msg']=$this->msg->findall();
        return view('testimonial/testimoniallist',$data);
    }
    public function delete($p_id)
    {
        $this->msg->where('id', $p_id);
        $this->msg->delete($p_id);
        $session = session();
        $session->setFlashdata('rojoni','Deleted!');
        return $this->response->redirect('/testimonial');
    }
}
