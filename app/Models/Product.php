<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            $product->user_id = isset(auth()->user()->id) ? auth()->user()->id : null;
            $product->save();
        });
    }

    public function author()
    {
        return $this->HasOne(User::class, 'id', 'user_id');
    }
}
