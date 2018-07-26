<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\IntegrationTest;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureAgentExtensionIsLoadedException;
use Kartenmacherei\NewRelic\NewRelicAgent;
use Kartenmacherei\NewRelic\ValueObject\ApplicationName;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\NewRelicAgent
 */
class NewRelicAgentTest extends TestCase
{
    public function testConstructorThrowsExceptionWhenExtensionIsNotInstalled()
    {
        $this->expectException(EnsureAgentExtensionIsLoadedException::class);
        $this->expectExceptionMessage('PHP extension "newrelic" is not loaded');

        new NewRelicAgent(new ApplicationName('foo'));
    }
}
