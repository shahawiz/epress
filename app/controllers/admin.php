<?php

class Admin extends Controller
{
    public function index($param=''){
        $admin = $this->model('ModelAdmin');
        $user = $admin->name='New Admin';
        $pass = $admin->pass='123456';
        $context = ['name'=>$user,'pass'=>$pass];
        $this->view('admin/dashboard',$context);
    }
}