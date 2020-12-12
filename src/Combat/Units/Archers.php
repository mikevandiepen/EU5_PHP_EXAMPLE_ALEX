<?php

namespace Eu5\Combat\Unit;

use Eu5\Combat\Contracts\CombatUnit;

class Archers extends BaseUnit implements CombatUnit
{
    public function __construct()
    {
        $this->fire = 1.5;
        $this->shock = 0;
        $this->health = 100;
    }
}
