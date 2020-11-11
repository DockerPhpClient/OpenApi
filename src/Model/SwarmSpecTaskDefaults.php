<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class SwarmSpecTaskDefaults
{
    /**
     * The log driver to use for tasks created in the orchestrator if.
     *
     * @var SwarmSpecTaskDefaultsLogDriver|null
     */
    protected $logDriver;

    /**
     * The log driver to use for tasks created in the orchestrator if.
    to use their previously configured log driver until recreated.
     */
    public function getLogDriver(): ?SwarmSpecTaskDefaultsLogDriver
    {
        return $this->logDriver;
    }

    /**
     * The log driver to use for tasks created in the orchestrator if.
    to use their previously configured log driver until recreated.
     */
    public function setLogDriver(?SwarmSpecTaskDefaultsLogDriver $logDriver): self
    {
        $this->logDriver = $logDriver;

        return $this;
    }
}
