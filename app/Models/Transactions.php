<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;
use App\Models\Users;

class Transactions extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'car_id',
        'id_customer',
        'rent_code',
        'total_price',
        'rental_start',
        'rental_end',
        'status',
    ];

    // Define relationships if needed
    public function car()
    {
        return $this->belongsTo(Cars::class, 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Users::class, 'id');
    }
}
