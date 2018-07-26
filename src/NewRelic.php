<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic;

interface NewRelic
{
    public function nameTransaction(string $name);
}
