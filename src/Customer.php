<?php
namespace Risky\belajar;

class Customer{


    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"){
        return "Hello $name, My Name is $this->name";
    }
}