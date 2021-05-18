<?php


namespace App\Utils;


interface BankAccountInterface
{
    /**
     * @param int $amount contains the amount to be withdrawn
     * @return boolean
     */

    public function withdraw(int $amount): bool;

    /**
     * @param int $amount contains the amount to be deposit, non negative
     */

    public function deposit(int $amount): void;

}