<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\ValueObject;

use Kartenmacherei\NewRelic\Ensureance\EnsureIsNotEmptyStringTrait;

class TransactionName
{
    use EnsureIsNotEmptyStringTrait;

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->ensureIsNotEmptyString($value, 'transaction name');

        $this->value = $value;
    }

    public function asString(): string
    {
        return $this->value;
    }
}
