<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params =[];
    
    public function __construct()
    {
      $url = $this-> PareseUrl();
    }

    public function PareseUrl()
    {
        if(isset($_GET['url']))
        {
            
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }


}