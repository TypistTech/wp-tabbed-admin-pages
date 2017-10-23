<?php

declare(strict_types=1);

namespace TypistTech\WPTabbedAdminPages\Helper;

use AspectMock\Test;
use Codeception\Module;
use Codeception\TestInterface;

/**
 * Here you can define custom actions
 * all public methods declared in helper class will be available in $I
 */
class Functional extends Module
{
    public function _after(TestInterface $test)
    {
        parent::_after($test);
        Test::clean();
    }
}
