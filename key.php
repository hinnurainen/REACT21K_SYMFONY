<?php


namespace App;


use App\Utils\KeyInterface;

class key implements KeyInterface
{
private int $code;

public function __construct(int $code) {
    $this->code = $code;
}

public function getCode(): int {
    return $this->code;
}

public function equals(KeyInterface $key): bool
{
    return (boolean) ($key->getCode()===$this->code);
}
}