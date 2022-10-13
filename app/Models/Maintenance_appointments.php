<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_appointments extends Model
{
    use HasFactory;

    public function Maintenance(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}
