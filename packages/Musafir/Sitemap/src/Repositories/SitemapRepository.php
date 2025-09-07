<?php

namespace Musafir\Sitemap\Repositories;

use Musafir\Core\Eloquent\Repository;
use Musafir\Sitemap\Contracts\Sitemap;

class SitemapRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Sitemap::class;
    }
}
