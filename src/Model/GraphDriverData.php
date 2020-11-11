<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class GraphDriverData
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string[]|null
     */
    protected $data;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }

    /**
     * @param string[]|null $data
     */
    public function setData(?iterable $data): self
    {
        $this->data = $data;

        return $this;
    }
}
