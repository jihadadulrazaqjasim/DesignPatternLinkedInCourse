<?php
namespace Phppractice\Controllers\Auth;

class LoginController {
    private $username;
    private $password;
    public function __construct($username,$password)
    {
        $this->username =$username;
        $this->password=$password;
    }

    public function getCredentials()
    {
        return $this->username . ', ' . $this->password;
    }
}
?>