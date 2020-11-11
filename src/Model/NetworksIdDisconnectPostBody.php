<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class NetworksIdDisconnectPostBody
{
    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @var string|null
     */
    protected $container;
    /**
     * Force the container to disconnect from the network.
     *
     * @var bool|null
     */
    protected $force;

    /**
     * The ID or name of the container to disconnect from the network.
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }

    /**
     * The ID or name of the container to disconnect from the network.
     */
    public function setContainer(?string $container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Force the container to disconnect from the network.
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * Force the container to disconnect from the network.
     */
    public function setForce(?bool $force): self
    {
        $this->force = $force;

        return $this;
    }
}
