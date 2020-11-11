<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class RestartPolicy
{
    /**
     * - Empty string means not to restart.
     *
     * @var string|null
     */
    protected $name;
    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     *
     * @var int|null
     */
    protected $maximumRetryCount;

    /**
     * - Empty string means not to restart.
    - `on-failure` Restart only when the container exit code is non-zero
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * - Empty string means not to restart.
    - `on-failure` Restart only when the container exit code is non-zero
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     */
    public function getMaximumRetryCount(): ?int
    {
        return $this->maximumRetryCount;
    }

    /**
     * If `on-failure` is used, the number of times to retry before giving up.
     */
    public function setMaximumRetryCount(?int $maximumRetryCount): self
    {
        $this->maximumRetryCount = $maximumRetryCount;

        return $this;
    }
}