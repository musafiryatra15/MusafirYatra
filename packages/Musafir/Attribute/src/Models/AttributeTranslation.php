<?php

namespace Musafir\Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use Musafir\Attribute\Contracts\AttributeTranslation as AttributeTranslationContract;

class AttributeTranslation extends Model implements AttributeTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['name'];
}
