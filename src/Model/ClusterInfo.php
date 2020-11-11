<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class ClusterInfo
{
    /**
     * The ID of the swarm.
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
     * Date and time at which the swarm was initialised in.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Date and time at which the swarm was last updated in.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root.
     *
     * @var TLSInfo|null
     */
    protected $tLSInfo;
    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     *
     * @var bool|null
     */
    protected $rootRotationInProgress;
    /**
     * DataPathPort specifies the data path port number for data traffic.
     *
     * @var int|null
     */
    protected $dataPathPort = 4789;
    /**
     * Default Address Pool specifies default subnet pools for global scope.
     *
     * @var string[]|null
     */
    protected $defaultAddrPool;
    /**
     * SubnetSize specifies the subnet size of the networks created from the.
     *
     * @var int|null
     */
    protected $subnetSize = 24;

    /**
     * The ID of the swarm.
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * The ID of the swarm.
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

    /**
     * Date and time at which the swarm was initialised in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Date and time at which the swarm was initialised in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time at which the swarm was last updated in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Date and time at which the swarm was last updated in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }

    /**
     * User modifiable swarm configuration.
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root.
    CA certificate.
     */
    public function getTLSInfo(): ?TLSInfo
    {
        return $this->tLSInfo;
    }

    /**
     * Information about the issuer of leaf TLS certificates and the trusted root.
    CA certificate.
     */
    public function setTLSInfo(?TLSInfo $tLSInfo): self
    {
        $this->tLSInfo = $tLSInfo;

        return $this;
    }

    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     */
    public function getRootRotationInProgress(): ?bool
    {
        return $this->rootRotationInProgress;
    }

    /**
     * Whether there is currently a root CA rotation in progress for the swarm.
     */
    public function setRootRotationInProgress(?bool $rootRotationInProgress): self
    {
        $this->rootRotationInProgress = $rootRotationInProgress;

        return $this;
    }

    /**
     * DataPathPort specifies the data path port number for data traffic.
    If no port is set or is set to 0, the default port (4789) is used.
     */
    public function getDataPathPort(): ?int
    {
        return $this->dataPathPort;
    }

    /**
     * DataPathPort specifies the data path port number for data traffic.
    If no port is set or is set to 0, the default port (4789) is used.
     */
    public function setDataPathPort(?int $dataPathPort): self
    {
        $this->dataPathPort = $dataPathPort;

        return $this;
    }

    /**
     * Default Address Pool specifies default subnet pools for global scope.
     *
     * @return string[]|null
     */
    public function getDefaultAddrPool(): ?array
    {
        return $this->defaultAddrPool;
    }

    /**
     * Default Address Pool specifies default subnet pools for global scope.
     *
     * @param string[]|null $defaultAddrPool
     */
    public function setDefaultAddrPool(?array $defaultAddrPool): self
    {
        $this->defaultAddrPool = $defaultAddrPool;

        return $this;
    }

    /**
     * SubnetSize specifies the subnet size of the networks created from the.
    default subnet pool.
     */
    public function getSubnetSize(): ?int
    {
        return $this->subnetSize;
    }

    /**
     * SubnetSize specifies the subnet size of the networks created from the.
    default subnet pool.
     */
    public function setSubnetSize(?int $subnetSize): self
    {
        $this->subnetSize = $subnetSize;

        return $this;
    }
}
