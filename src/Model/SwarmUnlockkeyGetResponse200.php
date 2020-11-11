<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class SwarmUnlockkeyGetResponse200
{
    /**
     * The swarm's unlock key.
     *
     * @var string|null
     */
    protected $unlockKey;

    /**
     * The swarm's unlock key.
     */
    public function getUnlockKey(): ?string
    {
        return $this->unlockKey;
    }

    /**
     * The swarm's unlock key.
     */
    public function setUnlockKey(?string $unlockKey): self
    {
        $this->unlockKey = $unlockKey;

        return $this;
    }
}
