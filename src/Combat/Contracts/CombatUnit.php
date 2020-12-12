<?php

namespace Eu5\Combat\Contracts;

interface CombatUnit
{
    public function getFireDamage(): float;

    public function getHealth(): float;

    public function getShockDamage(): float;
}
