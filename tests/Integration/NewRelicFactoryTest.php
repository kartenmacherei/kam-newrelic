<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\IntegrationTest;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureAgentExtensionIsLoadedException;
use Kartenmacherei\NewRelic\NewRelicDummyAgent;
use Kartenmacherei\NewRelic\NewRelicFactory;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Kartenmacherei\NewRelic\NewRelicFactory
 */
class NewRelicFactoryTest extends TestCase
{
    /**
     * @var NewRelicFactory
     */
    private $factory;

    protected function setUp(): void
    {
        parent::setUp();

        $this->factory = new NewRelicFactory();
    }

    public function testCreateNewRelicAgentThrowsException(): void
    {
        $this->expectException(EnsureAgentExtensionIsLoadedException::class);
        $this->expectExceptionMessage('PHP extension "newrelic" is not loaded');

        $this->factory->createNewRelicAgent('foo');
    }

    public function testCreateNewRelicDummyAgent(): void
    {
        $this->assertInstanceOf(NewRelicDummyAgent::class, $this->factory->createNewRelicDummyAgent());
    }
}
