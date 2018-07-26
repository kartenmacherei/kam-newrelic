<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\Ensureance;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureNotEmptyStringException;

trait EnsureIsNotEmptyStringTrait
{
    private function ensureIsNotEmptyString(string $string, string $name): void
    {
        if ('' === $string) {
            $message = sprintf('Expected "%s" to not be empty', $name);
            throw new EnsureNotEmptyStringException($message);
        }
    }
}
