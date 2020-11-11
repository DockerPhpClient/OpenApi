<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class Task
{
    /**
     * The ID of the task.
     *
     * @var string|null
     */
    protected $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed.
     *
     * @var ObjectVersion|null
     */
    protected $version;
    /**
     * @var string|null
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Name of the task.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec|null
     */
    protected $spec;
    /**
     * The ID of the service this task is part of.
     *
     * @var string|null
     */
    protected $serviceID;
    /**
     * @var int|null
     */
    protected $slot;
    /**
     * The ID of the node that this task is on.
     *
     * @var string|null
     */
    protected $nodeID;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @var GenericResourcesItem[]|null
     */
    protected $assignedGenericResources;
    /**
     * @var TaskStatus|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $desiredState;

    /**
     * The ID of the task.
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * The ID of the task.
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed.
    overwrite each other.
     */
    public function getVersion(): ?ObjectVersion
    {
        return $this->version;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed.
    overwrite each other.
     */
    public function setVersion(?ObjectVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Name of the task.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the task.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels(): ?iterable
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[]|null $labels
     */
    public function setLabels(?iterable $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * User modifiable task configuration.
     */
    public function getSpec(): ?TaskSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable task configuration.
     */
    public function setSpec(?TaskSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * The ID of the service this task is part of.
     */
    public function getServiceID(): ?string
    {
        return $this->serviceID;
    }

    /**
     * The ID of the service this task is part of.
     */
    public function setServiceID(?string $serviceID): self
    {
        $this->serviceID = $serviceID;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * The ID of the node that this task is on.
     */
    public function getNodeID(): ?string
    {
        return $this->nodeID;
    }

    /**
     * The ID of the node that this task is on.
     */
    public function setNodeID(?string $nodeID): self
    {
        $this->nodeID = $nodeID;

        return $this;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @return GenericResourcesItem[]|null
     */
    public function getAssignedGenericResources(): ?array
    {
        return $this->assignedGenericResources;
    }

    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or.
     *
     * @param GenericResourcesItem[]|null $assignedGenericResources
     */
    public function setAssignedGenericResources(?array $assignedGenericResources): self
    {
        $this->assignedGenericResources = $assignedGenericResources;

        return $this;
    }

    public function getStatus(): ?TaskStatus
    {
        return $this->status;
    }

    public function setStatus(?TaskStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDesiredState(): ?string
    {
        return $this->desiredState;
    }

    public function setDesiredState(?string $desiredState): self
    {
        $this->desiredState = $desiredState;

        return $this;
    }
}
