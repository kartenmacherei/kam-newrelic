<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic;

class VoidNewRelicAgent implements NewRelic
{
    public function nameTransaction(string $name)
    {
    }
}
