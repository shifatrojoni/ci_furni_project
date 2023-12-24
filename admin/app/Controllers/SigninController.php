<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SigninController extends BaseController
{
    protected $helpers = ['form'];
 
    public function index()
    {
        return view('signin');
    }

    public function login(){
        
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $formpassword = $this->request->getVar('password');
                   
        $data = $userModel->where('email', $email)->first();
       
        if($data){
            $dbpass = $data['password'];
            $formpass = sha1($formpassword);
                if($formpass == $dbpass){
                    $userData = [
                        "name" => $data['name'],
                        "email" => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($userData);
                     return redirect()->to('/');
               
                }   else {
                    $session->setFlashdata('msg', 'Your Password is incorrect');
                    return redirect()->to('/signin');
                }
    
        } else {
            $session->setFlashdata('msg', 'Your Email is incorrect');
            return redirect()->to('/signin');
        }


        // $session = session();
        // $userModel = new UserModel();
        // $email = $this->request->getVar('email');        
        // $formpassword = $this->request->getVar('password');

        // $data = $userModel->where('email', $email)->first();

        // if ($data) {
        //     $dbpass = $data['password'];
        //     $formpass = sha1($formpassword);
            
        //     if ($formpass == $dbpass) {
        //         $userData = [
        //             'name'=> $data['name'],
        //             'email'=> $data['email'],
        //             'isLoggedIn' => TRUE
        //         ];
        //         $session->set($userData);
        //             return redirect()->to('/');
        //     }else{
        //         return redirect()->to('/signin');
        //     }
        // }
        // else{
        //     $session->setFlashdata('msg', 'Your Email Address is Incorrect');
        //     return redirect()->to('/signin');
        // }

      

    }

    public function logout(){
        session()->destroy();
        return redirect()->to('signin');
    }
}


?>











