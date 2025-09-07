<?php

namespace Musafir\Installer\Database\Seeders;

use Illuminate\Database\Seeder;
use Musafir\Installer\Database\Seeders\Attribute\DatabaseSeeder as AttributeSeeder;
use Musafir\Installer\Database\Seeders\Category\DatabaseSeeder as CategorySeeder;
use Musafir\Installer\Database\Seeders\CMS\DatabaseSeeder as CMSSeeder;
use Musafir\Installer\Database\Seeders\Core\DatabaseSeeder as CoreSeeder;
use Musafir\Installer\Database\Seeders\Customer\DatabaseSeeder as CustomerSeeder;
use Musafir\Installer\Database\Seeders\Inventory\DatabaseSeeder as InventorySeeder;
use Musafir\Installer\Database\Seeders\Shop\ThemeCustomizationTableSeeder as ShopSeeder;
use Musafir\Installer\Database\Seeders\SocialLogin\DatabaseSeeder as SocialLoginSeeder;
use Musafir\Installer\Database\Seeders\User\DatabaseSeeder as UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        $this->call(AttributeSeeder::class, false, ['parameters' => $parameters]);
        $this->call(CategorySeeder::class, false, ['parameters' => $parameters]);
        $this->call(CoreSeeder::class, false, ['parameters' => $parameters]);
        $this->call(CustomerSeeder::class, false, ['parameters' => $parameters]);
        $this->call(CMSSeeder::class, false, ['parameters' => $parameters]);
        $this->call(InventorySeeder::class, false, ['parameters' => $parameters]);
        $this->call(SocialLoginSeeder::class, false, ['parameters' => $parameters]);
        $this->call(ShopSeeder::class, false, ['parameters' => $parameters]);
        $this->call(UserSeeder::class, false, ['parameters' => $parameters]);
    }
}
