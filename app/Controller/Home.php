<?php

class Home extends Controller
{
    private $product_model;
    private $card_model;

    public function __construct()
    {
        $this->product_model = $this->model("ProductModel");
        $this->card_model = $this->model("CardModel");
    }

    public function index()
    {
        $listBook = $this->product_model->GetAllProduct();
        $listCard = $this->card_model->GetAllCard();

        return $this->Views("Product/index", ['listBook'=>$listBook, 'card'=> $listCard]);
    }

    public function Product_card()
    {
        $listBook = $this->product_model->GetAllProduct();
        $card_by_user = $this->card_model->
        return $this->Views("Product/product_card", ['listBook'=>$listBook]);
    }
    public function detail()
    {
        return $this->Views("Share/Layout", ['subview'=> "Product/detail"]);
    }
}
