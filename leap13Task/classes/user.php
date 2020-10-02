<?php 
session_start();
class User{

    public $username;
    private $password;

    public function __construct($username = null ,$password = null)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login()
    {
        if( $this->username == 'leap13' && $this->password == 'leap13pass'){
            $_SESSION['username'] = 'leap13';
            $_SESSION['valid'] = true;
            return $_SESSION['username'];
        }
        return false;
    }

    public function isAuth()
    {
        if(isset($_SESSION['username']) && isset($_SESSION['valid'])){
            return true;
        }
        return false;
    }

}


?>