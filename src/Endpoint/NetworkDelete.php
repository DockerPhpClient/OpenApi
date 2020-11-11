<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Endpoint;

class NetworkDelete extends \Docker\OpenAPI\Runtime\Client\BaseEndpoint implements \Docker\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * @param string $id Network ID or name
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    use \Docker\OpenAPI\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/networks/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\OpenAPI\Exception\NetworkDeleteForbiddenException
     * @throws \Docker\OpenAPI\Exception\NetworkDeleteNotFoundException
     * @throws \Docker\OpenAPI\Exception\NetworkDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (204 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Docker\OpenAPI\Exception\NetworkDeleteForbiddenException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\OpenAPI\Exception\NetworkDeleteNotFoundException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\OpenAPI\Exception\NetworkDeleteInternalServerErrorException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}