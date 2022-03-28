<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transaction';
    protected $fillable = [' order_id', 'paid_amount',
                         'balance', 'transac_date', 'transac_amount',
                        'user_id', 'payment_method'];
    use HasFactory;
}
