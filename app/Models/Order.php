<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->order_id)) {
                $model->order_id = Str::uuid()->toString();
            }
        });
    }

}