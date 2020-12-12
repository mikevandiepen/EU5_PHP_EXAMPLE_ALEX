<?php

use Eu5\Player;

class Game
{
    private Player $offensive;

    private Player $defensive;

    public function __construct(Player $offensive, Player $defensive)
    {
        $this->offensive = $offensive;
        $this->defensive = $defensive;
    }

    public function run(): Player
    {
        while ($this->offensive->calvary()->getHealth() !== 0 || $this->defensive->calvary()->getHealth() !== 0) {
            $turnOffensive = $this->offensive->roleDice();
            $turnDefensive = $this->defensive->roleDice();
        }
    }
}
