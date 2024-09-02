<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Product extends Model
{
    protected $fillable=[
        'name',
        'price',
        'description',
        'quantity',
        'image',
    ];




    public function command(): HasOne
    {
        return $this->hasOne(Command::class);
    }
    use HasFactory;
}
