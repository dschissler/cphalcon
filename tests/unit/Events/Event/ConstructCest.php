<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Events\Event;

use UnitTester;

class ConstructCest
{
    /**
     * Tests Phalcon\Events\Event :: __construct()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function eventsEventConstruct(UnitTester $I)
    {
        $I->wantToTest("Events\Event - __construct()");
        $I->skipTest("Need implementation");
    }
}