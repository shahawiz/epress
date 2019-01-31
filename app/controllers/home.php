<?php
class Home extends Controller
{
    public function index($name='')
    {


     
    
       $newUser = $this->model('User');
       $newUser->name = $name;
       $newUser->age="30";

       $context=['name'=>$newUser->name];
       $this->view('home/index',$context);
       
    }
}    
