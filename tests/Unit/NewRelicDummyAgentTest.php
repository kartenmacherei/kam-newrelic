<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest;

use Kartenmacherei\NewRelic\NewRelicDummyAgent;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\NewRelicDummyAgent
 */
class NewRelicDummyAgentTest extends TestCase
{
    public function testNameTransaction(): void
    {
        $dummyAgent = new NewRelicDummyAgent();
        $this->assertNull($dummyAgent->nameTransaction('foo'));
    }
}
