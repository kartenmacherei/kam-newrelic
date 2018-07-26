<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest\ValueObject;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureNotEmptyStringException;
use Kartenmacherei\NewRelic\ValueObject\TransactionName;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\ValueObject\TransactionName
 */
class TransactionNameTest extends TestCase
{
    public function testAsString()
    {
        $expectedTransactionNameValue = 'foo';
        $transactionName = new TransactionName($expectedTransactionNameValue);

        $this->assertSame($expectedTransactionNameValue, $transactionName->asString());
    }

    public function testCreationWithEmptyString()
    {
        $this->expectException(EnsureNotEmptyStringException::class);
        $this->expectExceptionMessage('Expected "transaction name" to not be empty');

        new TransactionName('');
    }
}
