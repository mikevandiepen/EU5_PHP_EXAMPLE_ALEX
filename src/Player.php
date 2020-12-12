<?php

namespace Eu5;

use Eu5\Combat\Contracts\CombatUnit;
use Eu5\Combat\Unit\Archers;
use Eu5\Combat\Unit\Calvary;
use Eu5\Combat\Unit\Infantry;

class Player
{
    private string $name;

    private Calvary $calvary;
    private Infantry $infantry;
    private Archers $archers;

    public function __construct(string $name, Calvary $calvary, Infantry $infantry, Archers $archers)
    {
        $this->name = $name;
        $this->calvary = $calvary;
        $this->infantry = $infantry;
        $this->archers = $archers;
    }

    public function calvary(): Calvary
    {
        return $this->calvary;
    }

    public function infantry(): Infantry
    {
        return $this->infantry;
    }

    public function archers(): Archers
    {
        return $this->archers;
    }

    public function roleDice(): int
    {
        return rand(1,6);
    }
}
