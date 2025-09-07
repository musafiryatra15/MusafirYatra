<?php

namespace Musafir\Admin\Tests;

use Tests\TestCase;
use Musafir\Admin\Tests\Concerns\AdminTestBench;
use Musafir\Core\Tests\Concerns\CoreAssertions;

class AdminTestCase extends TestCase
{
    use AdminTestBench, CoreAssertions;
}
