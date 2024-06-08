<?php

namespace VoTong\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static('Wildcard permission class must implements VoTong\Permission\Contracts\Wildcard contract');
    }
}
