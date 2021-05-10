<?php

declare(strict_types=1);
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2021 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\Australia\SouthAustralia;

use ReflectionException;
use Yasumi\Holiday;

/**
 * Class for testing holidays in South Australia (Australia).
 */
class SouthAustraliaTest extends SouthAustraliaBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Initial setup of this Test Case.
     */
    protected function setUp(): void
    {
        $this->year = $this->generateRandomYear(1973);
    }

    /**
     * Tests if all official holidays in South Australia (Australia) are defined by the provider class.
     *
     * @throws ReflectionException
     */
    public function testOfficialHolidays(): void
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'goodFriday',
            'easterMonday',
            'christmasDay',
            'proclamationDay',
            'australiaDay',
            'anzacDay',
            'easterSaturday',
            'queensBirthday',
            'labourDay',
            'adelaideCup',
        ], $this->region, $this->year, Holiday::TYPE_OFFICIAL);
    }
}
