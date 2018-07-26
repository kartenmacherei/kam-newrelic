<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic;

use Kartenmacherei\NewRelic\Ensureance\EnsureAgentExtensionIsLoadedTrait;
use Kartenmacherei\NewRelic\ValueObject\ApplicationName;
use Kartenmacherei\NewRelic\ValueObject\TransactionName;

/**
 * @codeCoverageIgnore
 */
class NewRelicAgent implements NewRelic
{
    use EnsureAgentExtensionIsLoadedTrait;

    public function __construct(ApplicationName $applicationName)
    {
        self::ensureAgentExtensionIsLoaded();

        $this->setAppName($applicationName);
    }

    public function nameTransaction(string $name): void
    {
        $this->setTransactionName(new TransactionName($name));
    }

    private function setTransactionName(TransactionName $name): void
    {
        newrelic_name_transaction($name->asString());
    }

    private function setAppName(ApplicationName $applicationName): void
    {
        newrelic_set_appname($applicationName->asString(), '', true);
    }
}
