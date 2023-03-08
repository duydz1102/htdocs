<?php 
class Product extends Controller {

    private $modelProduct;

    function __construct()
    {
        $this->modelProduct = $this->model("ProductModel");
    }

    public function Index() {
        $list = $this->modelProduct->GetAllProduct();
        return $this->Views('Share/Layout', ['subview'=>"admin/Product", "list"=>$list]);
    }
    
    public function Create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $code = $_POST["code"];
            $name = $_POST["name"];
            $img_path = '/public/img/product/'.(new DateTime())->getTimestamp().'.png';
            $target = _DIR_ROOT.$img_path;
            $cate = $_POST["cate"];
            $price = $_POST["price"];                        
                        
            move_uploaded_file($_FILES["img_product"]["tmp_name"], $target);
            try{
            $this->modelProduct->Create($code, $name, $img_path, $price, $cate);
            header('Location: ' . _WEB_ROOT . '/admin-product');
            }
            catch (Exception $ex) {
                echo $ex;
                $this->Index(); 
            }   
        }
        $this->Index();
    }

    public function Edit() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $code = $_POST["code"];
            $name = $_POST["name"];
            $cate = $_POST["cate"];
            $price = $_POST["price"];

            if(file_exists(($_FILES["img_product"]["tmp_name"]))){
            $id = $_POST['id'];
            $img_path = _DIR_ROOT.$_POST["img_path"];            
            move_uploaded_file($_FILES["img_product"]["tmp_name"], $img_path);
            }
            try{
            $this->modelProduct->Edit($code, $name, $price, $cate, $id);
            }
            catch (Exception $ex) {
                echo $ex;
            }   
            finally {
                header('Location: ' . _WEB_ROOT . '/admin-product');
            }
        }
        $this->Index();
    }

    public function Delete() {
        $id = $_GET['id'];
        try {
            $this->modelProduct->Delete($id);
        }
        catch (Exception $ex) {
            echo $ex;
        }
        finally {
            $this->GetProductById2($id);
        }
    }

    public function GetAllProduct() {
        $list = $this->modelProduct->GetAllProduct();
        header("Content-Type: application/json");
        echo json_encode($list, \JSON_UNESCAPED_UNICODE);
        exit();
    }

    public function GetProductById() {
        $id = $_GET['id'];
        $result = $this->modelProduct->GetById($id);
        echo json_encode($result, \JSON_UNESCAPED_UNICODE);
        die;
    }

    private function GetProductById2($id) {
        $result = $this->modelProduct->GetById2($id);
        echo json_encode($result, \JSON_UNESCAPED_UNICODE);
        die;
    }
}
