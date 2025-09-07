<?php

namespace Musafir\Attribute\Repositories;

use Musafir\Core\Eloquent\Repository;

class AttributeOptionTranslationRepository extends Repository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return 'Musafir\Attribute\Contracts\AttributeOptionTranslation';
    }
}
