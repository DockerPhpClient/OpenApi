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

class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\OpenAPI\\Model\\TaskSpecContainerSpecPrivileges';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\OpenAPI\\Model\\TaskSpecContainerSpecPrivileges';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\OpenAPI\Model\TaskSpecContainerSpecPrivileges();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] !== null) {
            $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], 'Docker\\OpenAPI\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec', 'json', $context));
        } elseif (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] === null) {
            $object->setCredentialSpec(null);
        }
        if (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] !== null) {
            $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], 'Docker\\OpenAPI\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext', 'json', $context));
        } elseif (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] === null) {
            $object->setSELinuxContext(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCredentialSpec()) {
            $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
        }
        if (null !== $object->getSELinuxContext()) {
            $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
        }

        return $data;
    }
}