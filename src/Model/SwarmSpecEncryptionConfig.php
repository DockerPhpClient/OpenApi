<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * If set, generate a key and use it to lock data stored on the.
     *
     * @var bool|null
     */
    protected $autoLockManagers;

    /**
     * If set, generate a key and use it to lock data stored on the.
    managers.
     */
    public function getAutoLockManagers(): ?bool
    {
        return $this->autoLockManagers;
    }

    /**
     * If set, generate a key and use it to lock data stored on the.
    managers.
     */
    public function setAutoLockManagers(?bool $autoLockManagers): self
    {
        $this->autoLockManagers = $autoLockManagers;

        return $this;
    }
}
