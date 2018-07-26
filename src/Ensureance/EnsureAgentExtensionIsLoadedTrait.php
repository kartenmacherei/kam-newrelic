<?php

declare(strict_types=1);
namespace Kartenmacherei\NewRelic\Ensureance;

use Kartenmacherei\NewRelic\Ensureance\Exception\EnsureAgentExtensionIsLoadedException;

/**
 * @codeCoverageIgnore
 */
trait EnsureAgentExtensionIsLoadedTrait
{
    /**
     * @var string
     */
    private $extensionName = 'newrelic';

    private function ensureAgentExtensionIsLoaded()
    {
        if (!$this->isNewRelicExtensionLoaded()) {
            $message = sprintf('PHP extension "%s" is not loaded', $this->extensionName);
            throw new EnsureAgentExtensionIsLoadedException($message);
        }
    }

    private function isNewRelicExtensionLoaded(): bool
    {
        return extension_loaded($this->extensionName);
    }
}
