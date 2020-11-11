<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\OpenAPI\Exception;

class ContainerDeleteConflictException extends \RuntimeException implements ClientException
{
    private $errorResponse;

    public function __construct(\Docker\OpenAPI\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('conflict', 409);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
