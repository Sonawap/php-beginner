<?php
namespace Sidehustle\class;
require_once 'transaction.php';
use Sidehustle\class\Transaction;

class Customer extends Transaction{
    public $name = "Customer";
}

$customer = new Customer();
echo $customer->name;