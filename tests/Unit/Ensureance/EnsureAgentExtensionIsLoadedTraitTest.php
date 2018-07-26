<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\UnitTest\Ensureance;

use Kartenmacherei\NewRelic\Ensureance\EnsureAgentExtensionIsLoadedTrait;
use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureAgentExtensionIsLoadedException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\Ensureance\EnsureAgentExtensionIsLoadedTrait
 */
class EnsureAgentExtensionIsLoadedTraitTest extends TestCase
{
    use EnsureAgentExtensionIsLoadedTrait;

    public function testIsNewRelicExtensionLoaded()
    {
        $this->assertFalse($this->isNewRelicExtensionLoaded());
    }

    public function testEnsureAgentExtensionIsLoadedThrowsExpectedException()
    {
        $this->expectException(EnsureAgentExtensionIsLoadedException::class);
        $this->expectExceptionMessage('PHP extension "newrelic" is not loaded');

        $this->ensureAgentExtensionIsLoaded();
    }
}
