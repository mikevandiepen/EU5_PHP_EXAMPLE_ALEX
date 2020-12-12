<?php

namespace Eu5\Combat\Unit;

use Eu5\Combat\Contracts\CombatUnit;

class Calvary extends BaseUnit implements CombatUnit
{
    public function __construct()
    {
        $this->fire = 0;
        $this->shock = 2;
        $this->health = 100;
    }
}
