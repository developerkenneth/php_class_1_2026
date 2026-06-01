<?php

class User
{

    // here we store the user Data
    // to create a property you have to give it visibility level or access level
    public $userData;



    // accessibility level
    // private 
    // protected 
    // public

    private $secret = "password123";
    protected $children = "Abas Doe, Jumoke Doe";

    // methods in php are functions created in a class to carry out a particular action that particular class
    public function changeUsername($newName)
    {
        return $this->userData['name'] = $newName;
    }

    public function getSecret()
    {
        return $this->secret;
    }


    // constructors:
    public function __construct($username, $age, $height, $class)
    {
        // echo "message: user class has been created successfully";

        $this->userData =  [
            "name" => $username,
            "age"  => $age,
            "height" => $height,
            "class" => $class
        ];
    }
}
