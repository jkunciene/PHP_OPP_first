<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 12:24
 */
namespace OOP;
class Teacher extends User
{
    protected $type;

    public function __construct($name, $email, $phone, $type)
    {
        parent::__construct($name, $email, $phone);
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->type = $type;
    }
    public function profile()
    {
        parent::profile();
        $data[]=$this->name;
        $data[]=$this->email;
        $data[]=$this->phone;
        $data[]=$this->comment;
        $data[]=$this->type;

        return $data;
    }
}