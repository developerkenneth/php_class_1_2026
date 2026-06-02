<?php
require_once "User.php";
class Comments extends User
{

    public $comment = " hello world 1";
    public static $defaultComment = "hello world";


    public static function defaultComment()
    {
        return "hello world";
    }
    public function getUserData()
    {
        return $this->userData;
    }


    // bad code : cannot acces a private property from an extend class
    public function getNewScret()
    {
        return $this->secret;
    }

    public function getChildren()
    {
        return $this->children;
    }

    #[Override]
    public function __construct($username, $age, $height, $class, $comment)
    {
        $this->comment = $comment;
        return parent::__construct($username, $age, $height, $class);
    }

    public function getComment()
    {
        return $this->comment;
    }

    public static function getDefaultComment()
    {
        return  self::$defaultComment;
    }

    public static function getUserDataTwo($instanceOfUser)
    {
        return $instanceOfUser->userData;
    }
}
