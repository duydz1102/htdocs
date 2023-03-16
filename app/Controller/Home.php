<?php

class Home extends Controller
{
    private $product_model;

    public function index()
    {
        if(isset($_SESSION["user"])) {
            header('Location: ' . _WEB_ROOT . '/dang-nhap');
        }
        return $this->Views("Product/index");
    }
    
    public function detail()
    {
        return $this->Views("Share/Layout", ['subview'=> "Product/detail"]);
    }
}
