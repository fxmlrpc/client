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
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface Call
{
    /**
     * Returns the method name.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Returns the arguments.
     *
     * @return array
     */
    public function getArguments();
}
