<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'detail',
        'price',
        'photo',
        'category_id'
    ];

    public function scopeSearch($query) {
        if(request('search')) return $query->where('name', 'like', '%'.request('search').'%');
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function cart() : HasMany {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function order() : HasMany {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
