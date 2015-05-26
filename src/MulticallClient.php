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
interface MulticallClient
{
    /**
     * Start sequence of multicall
     *
     * @return MulticallBuilder
     */
    public function multicall();
}
