<?php
declare(strict_types=1);
class Transaction
{
    private ?Customer $customer = null;
    public function __construct(private float $amount, private string $description)
    {
        // php behind the scenes does the property definition and assignment
        // you can't use callable with visibility modifiers (public, private, protected)
        // you can't have duplicate property names
        echo $amount;
    }
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate /100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate /100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    
    public function __destruct()
    {
        echo 'Transaction object destroyed' . '<br>';
    }
}