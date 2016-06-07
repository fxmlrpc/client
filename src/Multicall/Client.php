<?php

/*
 * This file is part of the fXmlRpc package.
 *
 * (c) Lars Strojny <lstrojny@php.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fXmlRpc\Multicall;

/**
 * @author Lars Strojny <lstrojny@php.net>
 */
interface Client
{
    /**
     * Start sequence of multicall
     *
     * @return Builder
     */
    public function multicall();
}
