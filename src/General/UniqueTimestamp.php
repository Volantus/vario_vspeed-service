<?php
/**
 * Created by PhpStorm.
 * User: marius
 * Date: 03.09.17
 * Time: 18:22
 */

namespace Volantus\VarioVerticalSpeed\General;

/**
 * Interface UniqueTimestamp
 *
 * @package Volantus\VarioVerticalSpeed\General
 */
interface UniqueTimestamp
{
    /**
     * @return float High resolution process internal timestamp in seconds
     */
    public function getTimestamp(): float;
}