<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Normalizer;

use Docker\OpenAPI\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GenericResourcesItemDiscreteResourceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\OpenAPI\\Model\\GenericResourcesItemDiscreteResourceSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\OpenAPI\\Model\\GenericResourcesItemDiscreteResourceSpec';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\OpenAPI\Model\GenericResourcesItemDiscreteResourceSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Kind', $data) && $data['Kind'] !== null) {
            $object->setKind($data['Kind']);
        } elseif (\array_key_exists('Kind', $data) && $data['Kind'] === null) {
            $object->setKind(null);
        }
        if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
            $object->setValue($data['Value']);
        } elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
            $object->setValue(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getKind()) {
            $data['Kind'] = $object->getKind();
        }
        if (null !== $object->getValue()) {
            $data['Value'] = $object->getValue();
        }

        return $data;
    }
}
