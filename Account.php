<?php


namespace App;


use App\Utils\BankAccountInterface;

class Account implements BankAccountInterface
{
    private $balanceAnything;
    private $id;

    public function __construct($balance, $id)
    {
        $this->balanceAnything = $balance;
        $this->id = $id;
    }

    public function getBalance(): int
    {
        return $this->balanceAnything;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setBalance(int $amount): void
    {
        $this->balanceAnything = $amount;
    }

    public function deposit($amount):void {

        if($amount > 0) {
            $newAmount = $this->getBalance() + $amount;
            $this->setBalance($newAmount);
        }
    }

    public function withdraw($amount): bool {

        if ($amount > 0 && $amount < $this->getBalance()) {
            $newAmount = $this->getBalance() - $amount;
            $this->setBalance($newAmount);
            return true;
        } else {
            return false;
        }
    }

    /*public function deposit(int $amount): string
    {
        if ($amount < 0) {
            return 'Cannot deposit below zero';
        } else {
            $current = $this->getBalance();
            $newBalance = $current + $amount;
            $this->setBalance($newBalance);
            return strval($amount) . '€ deposited.';
        }
    }

    public function withdraw(int $amount): string
    {
        if ($amount < 0) {
            return 'Impossible to withdraw negative amounts.';
        } elseif ($amount > $this->getBalance()) {
            return 'Not enough money to withdraw.';
        } else {
            $current = $this->getBalance();
            $newBalance = $current - $amount;
            $this->setBalance($newBalance);
            return strval($amount) . '€ withdrawn.';
        }
    }*/
}
