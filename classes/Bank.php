<?php

require_once "./Payment.php";
class Bank implements Payment
{
    public function card()
    {
        return "transfer has been made successfully";
    }
    public function transfer()
    {
        return "transfer has been made successfully";
    }
}
