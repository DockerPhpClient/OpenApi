<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class ImageID
{
    /**
     * @var string|null
     */
    protected $iD;

    public function getID(): ?string
    {
        return $this->iD;
    }

    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
