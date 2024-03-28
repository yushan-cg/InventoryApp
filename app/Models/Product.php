<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'ProductName',
        'PartNumber',
        'ProductLabel',
        'StartingInventory',
        'InventoryReceived',
        'InventoryShipped',
        'InventoryOnHand',
        'MinimumRequired',
    ];

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
