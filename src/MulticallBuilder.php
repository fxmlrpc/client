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
interface MulticallBuilder
{
    /**
     * Registers a success handler applicable to all multicall responses
     *
     * @param callable $handler
     *
     * @return self
     *
     * @throws Exception\InvalidArgumentException
     */
    public function onSuccess(callable $handler);

    /**
     * Registers an error handler applicable to all multicall responses
     *
     * @param callable $handler
     *
     * @return self
     *
     * @throws Exception\InvalidArgumentException
     */
    public function onError(callable $handler);

    /**
     * Adds a call to the end of the multicall stack
     *
     * @param string   $methodName
     * @param array    $params
     * @param callable $onSuccess
     * @param callable $onError
     *
     * @return self
     */
    public function addCall($methodName, array $params = [], callable $onSuccess = null, callable $onError = null);

    /**
     * Sends the multicall request to the server
     *
     * @return array
     */
    public function execute();
}
