<?php

/*
 * This file is part of the fXmlRpc package.
 *
 * (c) Lars Strojny <lstrojny@php.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fXmlRpc;

/**
 * @author Lars Strojny <lstrojny@php.net>
 */
interface CallClient
{
    /**
     * Executes a remote call
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     *
     * @throws Exception\FaultException If an XML RPC fault occures
     */
    public function call($method, array $arguments = []);
}
