<?php

/*
 * This file is part of the fXmlRpc package.
 *
 * (c) Lars Strojny <lstrojny@php.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fXmlRpc\Exception;

use fXmlRpc\Exception;

/**
 * Thrown in case of an XML RPC Fault
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface FaultException extends Exception
{
    /**
     * Returns the fault code
     *
     * @return integer
     */
    public function getFaultCode();

    /**
     * Returns the fault string
     *
     * @return string
     */
    public function getFaultString();
}
