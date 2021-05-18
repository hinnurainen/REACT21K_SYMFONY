<?php


namespace App\Utils;


interface KeyInterface
{

    /**
     * @param $key contains the key object to compare with
     * @return boolean
     */

    public function equals(KeyInterface $key): bool;

}