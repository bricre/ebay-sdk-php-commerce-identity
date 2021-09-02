<?php

namespace Ebay\Commerce\Identity;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getUser' => [
            '200.' => 'Ebay\\Commerce\\Identity\\Model\\UserResponse',
        ],
    ];
}
