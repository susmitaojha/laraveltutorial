<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_address extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'address'];
}
