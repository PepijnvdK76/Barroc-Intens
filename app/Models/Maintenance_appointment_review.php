<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_appointment_review extends Model
{
    use HasFactory;
    protected $table = 'maintenance_appointment_reviews';
    protected $guarded = [];
}
