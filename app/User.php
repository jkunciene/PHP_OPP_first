<?php

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
        $this->email = $email;
        $this->phone = $phone;

    }

    public function profile(){
        $data[]=$this->name;
        $data[]=$this->email;
        $data[]=$this->phone;
        $data[]=$this->comment;

        return $data;
    }

    public function setCommet($comment){
        $this->comment=$comment;
    }
}