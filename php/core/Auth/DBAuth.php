<?php
namespace Core\Auth;

use Core\Database\Database;

class DBAuth {

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($email, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$email], null, true);
        if($user){
            var_dump(password_verify($password,$user->password));
            if(password_verify($password,$user->password )){
                $_SESSION['auth'] = $user->id;
                $_SESSION['user'] = $user;
                return true;
            }
        }
        return false;
    }
    public function logged(){
        return isset($_SESSION['auth']);
    }

}