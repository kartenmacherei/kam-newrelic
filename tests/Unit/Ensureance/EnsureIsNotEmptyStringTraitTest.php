<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest\Ensureance;

use Kartenmacherei\NewRelic\Ensureance\EnsureIsNotEmptyStringTrait;
use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureNotEmptyStringException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\Ensureance\EnsureIsNotEmptyStringTrait
 */
class EnsureIsNotEmptyStringTraitTest extends TestCase
{
    use EnsureIsNotEmptyStringTrait;

    public function testEnsureIsNotEmptyStringWithValidParameter()
    {
        $this->assertNull($this->ensureIsNotEmptyString('not-empty', 'name from test'));
    }

    public function testEnsureIsNotEmptyStringThrowsExpectedException()
    {
        $this->expectException(EnsureNotEmptyStringException::class);
        $this->expectExceptionMessage('Expected "name from test" to not be empty');

        $this->ensureIsNotEmptyString('', 'name from test');
    }
}
