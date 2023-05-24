<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_date',
        'total_price',
        'user_id'
    ];

    public function user() : BelongsTo {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    public function order() : HasMany {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
