<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_invoice_product extends Model
{
    use HasFactory;
    protected $table = 'Custom_invoices_products';
    protected $guarded = [];
}
