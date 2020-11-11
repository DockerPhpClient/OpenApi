<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Endpoint;

class ImageHistory extends \Docker\OpenAPI\Runtime\Client\BaseEndpoint implements \Docker\OpenAPI\Runtime\Client\Endpoint
{
    protected $name;

    /**
     * Return parent layers of an image.
     *
     * @param string $name Image name or ID
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    use \Docker\OpenAPI\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/images/{name}/history');
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
     * @throws \Docker\OpenAPI\Exception\ImageHistoryNotFoundException
     * @throws \Docker\OpenAPI\Exception\ImageHistoryInternalServerErrorException
     *
     * @return \Docker\OpenAPI\Model\ImagesNameHistoryGetResponse200Item[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ImagesNameHistoryGetResponse200Item[]', 'json');
        }
        if (404 === $status) {
            throw new \Docker\OpenAPI\Exception\ImageHistoryNotFoundException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\OpenAPI\Exception\ImageHistoryInternalServerErrorException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}