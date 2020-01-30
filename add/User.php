<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 12:24
 */
namespace OOP;
class User
{
    protected $name;
    protected $email;
    protected $phone;
    protected $comment;

    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->name = $email;
        $this->name = $phone;
    }
}