<?php

namespace Phppractice\Models;

class User
{

    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getAccountInfo()
    {
        return 'username: ' . $this->username . ', password: ' . $this->password;
    }
}

function independentFun()
{
    echo "I am independent but under Models namespace.";
}
