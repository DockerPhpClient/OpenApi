<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Endpoint;

class ImageSearch extends \Docker\OpenAPI\Runtime\Client\BaseEndpoint implements \Docker\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * Search for an image on Docker Hub.
     *
     * @param array $queryParameters {
     *
     *     @var string $term Term to search
     *     @var int $limit Maximum number of results to return
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the images list. Available filters:

    - `stars=<number>` Matches images that has at least 'number' stars.

     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Docker\OpenAPI\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/images/search';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['term', 'limit', 'filters']);
        $optionsResolver->setRequired(['term']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('term', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('filters', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\OpenAPI\Exception\ImageSearchInternalServerErrorException
     *
     * @return \Docker\OpenAPI\Model\ImagesSearchGetResponse200Item[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ImagesSearchGetResponse200Item[]', 'json');
        }
        if (500 === $status) {
            throw new \Docker\OpenAPI\Exception\ImageSearchInternalServerErrorException($serializer->deserialize($body, 'Docker\\OpenAPI\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
