<?php
/**
 * Abstract Exception Class
 * @author John Kloor <kloor@bgsu.edu>
 * @copyright 2017 Bowling Green State University Libraries
 * @license MIT
 */

namespace App\Exception;

/**
 * An exception for when a resource could not be found.
 */
abstract class AbstractExtension extends \Exception
{
    protected $title = 'Unexpected Error';
    protected $message = 'Your request could not be completed.';
}
