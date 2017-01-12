<?php
/**
 * Request Exception Class
 * @author John Kloor <kloor@bgsu.edu>
 * @copyright 2017 Bowling Green State University Libraries
 * @license MIT
 */

namespace App\Exception;

/**
 * An exception for errors when submitting a request.
 */
class RequestException extends AbstractException
{
    protected $title = 'Invalid Request';
    protected $message = 'Please check your request and try again.';
}
