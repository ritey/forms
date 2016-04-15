<?php
/*
 * This file is part of the Forms package.
 *
 * (c) David Wright <dave@ritey.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Forms facade class
 *
 */
class FormsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'forms';
    }
}