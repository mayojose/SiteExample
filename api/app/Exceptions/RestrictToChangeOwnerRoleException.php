<?php

namespace App\Exceptions;

/*
 * This file is part of POWERSITE TEAM PROJECT.
 *
 *  (c) Gabriel Mayo
 *  (c) POWERSITE
 *
 *  For the full copyright and license information.
 * 
 */

use Symfony\Component\HttpKernel\Exception\HttpException;

class RestrictToChangeOwnerRoleException extends HttpException
{
    /**
     * Constructor.
     *
     * @param string     $message  The internal exception message
     * @param \Exception $previous The previous exception
     * @param int        $code     The internal exception code
     */
    public function __construct($message = null, \Exception $previous = null, $code = 0)
    {
        parent::__construct(400, 'You cannot change owner role.', $previous, [], 10002);
    }

}
