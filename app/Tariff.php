<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $table = "tariff";

    public function getFormattedPriceAttribute()
	{
	    return number_format($this->attributes['price'], 2);
	}
}
