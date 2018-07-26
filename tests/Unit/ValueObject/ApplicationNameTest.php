<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest\ValueObject;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureNotEmptyStringException;
use Kartenmacherei\NewRelic\ValueObject\ApplicationName;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\ValueObject\ApplicationName
 */
class ApplicationNameTest extends TestCase
{
    public function testAsString(): void
    {
        $expectedApplicationNameValue = 'foo';
        $applicationName = new ApplicationName($expectedApplicationNameValue);

        $this->assertSame($expectedApplicationNameValue, $applicationName->asString());
    }

    public function testCreationWithEmptyString(): void
    {
        $this->expectException(EnsureNotEmptyStringException::class);
        $this->expectExceptionMessage('Expected "application name" to not be empty');

        new ApplicationName('');
    }
}
