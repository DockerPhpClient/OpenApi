<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Endpoint;

class NodeUpdate extends \Docker\OpenAPI\Runtime\Client\BaseEndpoint implements \Docker\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * @param string $id              The ID of the node
     * @param array  $queryParameters {
     *
     *     @var int $version The version number of the node object being updated. This is required
    to avoid conflicting writes.

     * }
     */
    public function __construct(string $id, \Docker\OpenAPI\Model\NodeSpec $body, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $body;
        $this->queryParameters = $queryParameters;
    }

    use \Docker\OpenAPI\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/nodes/{id}/update');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['version']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('version', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\OpenAPI\Exception\NodeUpdateBadRequestException
     * @throws \Docker\OpenAPI\Exception\NodeUpdateNotFoundException
     * @throws \Docker\OpenAPI\Exception\NodeUpdateInternalServerErrorException
     * @throws \Docker\OpenAPI\Exception\NodeUpdateServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\OpenAPI\Exception\NodeUpdateBadRequestException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\OpenAPI\Exception\NodeUpdateNotFoundException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\OpenAPI\Exception\NodeUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\OpenAPI\Exception\NodeUpdateServiceUnavailableException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
