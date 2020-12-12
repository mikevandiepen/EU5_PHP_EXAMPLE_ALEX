<?php

namespace Eu5\Combat\Unit;

abstract class BaseUnit
{
    protected float $fire;
    protected float $shock;
    protected float $health;

    public function getFireDamage(): float
    {
        return $this->fire;
    }

    public function getShockDamage(): float
    {
        return $this->shock;
    }

    public function getHealth(): float
    {
        return $this->health;
    }
}
