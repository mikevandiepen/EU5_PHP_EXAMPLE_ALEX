<?php

namespace Eu5;

use Eu5\Combat\Unit\Archers;
use Eu5\Combat\Unit\Calvary;
use Eu5\Combat\Unit\Infantry;
use Game;

class Application
{
    public function __construct()
    {
        $offensive = new Player(
            'Alex',
            new Calvary(),
            new Infantry(),
            new Archers(),
        );

        $defensive = new Player(
            'Alex',
            new Calvary(),
            new Infantry(),
            new Archers(),
        );

        $game = new Game($offensive, $defensive);

        $game->run();
    }
}
