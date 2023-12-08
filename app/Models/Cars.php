<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transactions;
class Cars extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'brand',
        'model',
        'year',
        'status',
        'plat_number',
        'price_per_day',
        'price_per_week',
        'type',
        'seats',
        'engine',
        'gasoline',
        'transmission',
        'image',
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'car_id');
    }
}
