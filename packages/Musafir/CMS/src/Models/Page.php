<?php

namespace Musafir\CMS\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Musafir\CMS\Contracts\Page as PageContract;
use Musafir\CMS\Database\Factories\PageFactory;
use Musafir\Core\Eloquent\TranslatableModel;
use Musafir\Core\Models\ChannelProxy;

class Page extends TranslatableModel implements PageContract
{
    use HasFactory;

    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $table = 'cms_pages';

    /**
     * Translation model foreign key column
     *
     * @var string
     */
    protected $translationForeignKey = 'cms_page_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['layout'];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = [
        'content',
        'meta_description',
        'meta_title',
        'page_title',
        'meta_keywords',
        'html_content',
        'url_key',
    ];

    /**
     * With the translations given attributes
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * Get the channels.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany;
     */
    public function channels()
    {
        return $this->belongsToMany(ChannelProxy::modelClass(), 'cms_page_channels', 'cms_page_id');
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return PageFactory::new();
    }
}
