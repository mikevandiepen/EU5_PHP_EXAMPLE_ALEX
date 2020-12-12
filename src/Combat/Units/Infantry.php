<?php

namespace Eu5\Combat\Unit;

use Eu5\Combat\Contracts\CombatUnit;

class Infantry extends BaseUnit implements CombatUnit
{
    public function __construct()
    {
        $this->fire = 0.5;
        $this->shock = 1;
        $this->health = 100;
    }
}
