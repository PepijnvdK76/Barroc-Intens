<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_appointments extends Model
{
    use HasFactory;
    protected $table = 'maintenance_appointments';
    protected $guarded = [];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function Maintenance(){
        return $this->belongsTo(Company::class, 'company_id');
    }


}
