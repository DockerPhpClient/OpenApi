<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Model;

class SwarmSpecCAConfig
{
    /**
     * The duration node certificates are issued for.
     *
     * @var int|null
     */
    protected $nodeCertExpiry;
    /**
     * Configuration for forwarding signing requests to an external.
     *
     * @var SwarmSpecCAConfigExternalCAsItem[]|null
     */
    protected $externalCAs;
    /**
     * The desired signing CA certificate for all swarm node TLS leaf.
     *
     * @var string|null
     */
    protected $signingCACert;
    /**
     * The desired signing CA key for all swarm node TLS leaf certificates,.
     *
     * @var string|null
     */
    protected $signingCAKey;
    /**
     * An integer whose purpose is to force swarm to generate a new.
     *
     * @var int|null
     */
    protected $forceRotate;

    /**
     * The duration node certificates are issued for.
     */
    public function getNodeCertExpiry(): ?int
    {
        return $this->nodeCertExpiry;
    }

    /**
     * The duration node certificates are issued for.
     */
    public function setNodeCertExpiry(?int $nodeCertExpiry): self
    {
        $this->nodeCertExpiry = $nodeCertExpiry;

        return $this;
    }

    /**
     * Configuration for forwarding signing requests to an external.
     *
     * @return SwarmSpecCAConfigExternalCAsItem[]|null
     */
    public function getExternalCAs(): ?array
    {
        return $this->externalCAs;
    }

    /**
     * Configuration for forwarding signing requests to an external.
     *
     * @param SwarmSpecCAConfigExternalCAsItem[]|null $externalCAs
     */
    public function setExternalCAs(?array $externalCAs): self
    {
        $this->externalCAs = $externalCAs;

        return $this;
    }

    /**
     * The desired signing CA certificate for all swarm node TLS leaf.
    certificates, in PEM format.
     */
    public function getSigningCACert(): ?string
    {
        return $this->signingCACert;
    }

    /**
     * The desired signing CA certificate for all swarm node TLS leaf.
    certificates, in PEM format.
     */
    public function setSigningCACert(?string $signingCACert): self
    {
        $this->signingCACert = $signingCACert;

        return $this;
    }

    /**
     * The desired signing CA key for all swarm node TLS leaf certificates,.
    in PEM format.
     */
    public function getSigningCAKey(): ?string
    {
        return $this->signingCAKey;
    }

    /**
     * The desired signing CA key for all swarm node TLS leaf certificates,.
    in PEM format.
     */
    public function setSigningCAKey(?string $signingCAKey): self
    {
        $this->signingCAKey = $signingCAKey;

        return $this;
    }

    /**
     * An integer whose purpose is to force swarm to generate a new.
    `SigningCACert` and `SigningCAKey`
     */
    public function getForceRotate(): ?int
    {
        return $this->forceRotate;
    }

    /**
     * An integer whose purpose is to force swarm to generate a new.
    `SigningCACert` and `SigningCAKey`
     */
    public function setForceRotate(?int $forceRotate): self
    {
        $this->forceRotate = $forceRotate;

        return $this;
    }
}
