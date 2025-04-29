<?php

class User
{
    protected $name;
    protected $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getDetails()
    {
        return "Name: $this->name </br> Email: $this->email <hr>";
    }
}

class Admin extends User
{
    protected $role;

    public function __construct($name, $email, $role)
    {
        parent::__construct($name, $email);
        $this->role = $role;
    }

    public function getDetails()
    {
        return "Name: $this->name </br> Email: $this->email </br> Role: $this->role <hr>";
    }
}

$u1 = new User('Zain', "zain@gmail.com");
$admin = new Admin("Hamza", "hamza@example.com", "Web Dev");


echo $u1->getDetails();
echo $admin->getDetails();