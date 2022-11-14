<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Review_product extends Model
{
    use HasFactory;
    protected $table = 'review_products';
    protected $guarded = [];
}
