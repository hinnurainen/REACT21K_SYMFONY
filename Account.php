<?php


namespace App;


class Account
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

    public function setBalance(int $balance): void
    {
        $this->balanceAnything = $balance;
    }

    public function deposit(int $depositAmount): string
    {
        if ($depositAmount < 0) {
            return 'Cannot deposit below zero';
        } else {
            $current = $this->getBalance();
            $newBalance = $current + $depositAmount;
            $this->setBalance($newBalance);
            return strval($depositAmount) . '€ deposited.';
        }
    }

    public function withdraw(int $withdrawAmount): string
    {
        if ($withdrawAmount < 0) {
            return 'Impossible to withdraw negative amounts.';
        } elseif ($withdrawAmount > $this->getBalance()) {
            return 'Not enough money to withdraw.';
        } else {
            $current = $this->getBalance();
            $newBalance = $current - $withdrawAmount;
            $this->setBalance($newBalance);
            return strval($withdrawAmount) . '€ withdrawn.';
        }
    }
}