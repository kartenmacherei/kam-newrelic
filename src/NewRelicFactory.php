<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic;

use Kartenmacherei\NewRelic\ValueObject\ApplicationName;

class NewRelicFactory
{
    /**
     * @codeCoverageIgnore
     */
    public function createNewRelicAgent(string $appName): NewRelic
    {
        return new NewRelicAgent(new ApplicationName($appName));
    }

    public function createNewRelicDummyAgent(): NewRelicDummyAgent
    {
        return new NewRelicDummyAgent();
    }
}
