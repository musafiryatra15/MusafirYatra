<?php

namespace Musafir\Shop\Tests;

use Tests\TestCase;
use Musafir\Core\Tests\Concerns\CoreAssertions;
use Musafir\Shop\Tests\Concerns\ShopTestBench;

class ShopTestCase extends TestCase
{
    use CoreAssertions, ShopTestBench;
}
