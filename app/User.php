<?php

namespace OOP;
abstract class User
{
    protected $name;
    protected $email;
    protected $phone;
    protected $comment;

    abstract public function __construct($name, $email, $phone);

    abstract public function profile();

    abstract public function setCommet($comment);
}