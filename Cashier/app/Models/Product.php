<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function sold()
    {
        return $this->hasOne(Sold::class);
    }

    public function scopeIsDebt($query)
    {
        return $query->where('is_debt', 1)->get();
    }

    public function scopeDecode($query)
    {
        $query->where('id', request()->id)->where('count', '=!', 0)->get();
    }

    public function scopeExpire($query)
    {
        return $query->where('expire_date', '<=', now())->get();
    }
}
