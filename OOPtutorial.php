<?php

class Customer{
    public $id;
    public $name;
    public $email;
    public $balance;

    public function getCustomer($id){
        $this->id = $id;
        return $this->id;
    }
}

$customer = new Customer();

echo $customer->getCustomer(1);