<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest;

use Kartenmacherei\NewRelic\VoidNewRelicAgent;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\VoidNewRelicAgent
 */
class VoidNewRelicAgentTest extends TestCase
{
    public function testNameTransaction()
    {
        $voidAgent = new VoidNewRelicAgent();
        $this->assertNull($voidAgent->nameTransaction('foo'));
    }
}
