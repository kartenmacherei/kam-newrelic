<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic;

class NewRelicDummyAgent implements NewRelic
{
    public function nameTransaction(string $name): void
    {
    }
}
