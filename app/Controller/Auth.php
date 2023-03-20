<?php
class Auth extends Controller
{
    protected $modelUser;

    function __construct()
    {
        $this->modelUser = $this->model("AuthModel");
    }

    public function Login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["UserName"];
            $password = $_POST["password"].'abcd';            

            try {
                $data = $this->modelUser->GetUser(trim($username), trim(md5($password)));                    
                if (isset($data[0])) {
                    $_SESSION["username"] = $username;
                    header('Location: ' . _WEB_ROOT . '/trang-chu');
                    //return $this->Views("Product/index", ['username'=>$username]);
                } else {
                    session_destroy();                    
                    return $this->Views("Share/Blank", ['subview' => 'Auth/LogIn', 'error'=> true, 'user'=> $username, 'pass'=> $password]);
                }
            } catch (Exception $ex) {
                session_destroy();
                return $this->Views("Share/Blank", ['subview' => 'Auth/LogIn', 'error'=> true, 'user'=> $username, 'pass'=> $password]);
            }
        }

        return $this->Views("Share/Blank", ['subview' => 'Auth/LogIn']);
    }

    public function LogOut()
    {
        session_destroy();
        header('Location: ' . _WEB_ROOT . '/trang-chu');
    }

    public function Signin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["Email"];
            $username = $_POST["UserName"];
            $password = $_POST["password"].'abcd';

            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            $this->modelUser->createUser($email, $username, trim(md5($password)));

            header('Location: ' . _WEB_ROOT . '/trang-chu');
        } else {
            return $this->Views("Share/Blank", ['subview' => 'Auth/SignIn']);
        }
    }

    public function CheckExits()
    {
        $user =  $_GET['user'];
        $data =  $this->modelUser->CheckExit($user);
        echo json_encode($data);
        die;
    }
}
