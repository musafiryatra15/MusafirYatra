<?php

namespace Musafir\SocialLogin\Models;

use Illuminate\Database\Eloquent\Model;
use Musafir\Customer\Models\CustomerProxy;
use Musafir\SocialLogin\Contracts\CustomerSocialAccount as CustomerSocialAccountContract;

class CustomerSocialAccount extends Model implements CustomerSocialAccountContract
{
    protected $fillable = [
        'customer_id',
        'provider_name',
        'provider_id',
    ];

    /**
     * Get the customer that belongs to the social aoount.
     */
    public function customer()
    {
        return $this->belongsTo(CustomerProxy::modelClass());
    }
}
