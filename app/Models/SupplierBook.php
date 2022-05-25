<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBook extends Model
{
    use HasFactory;

    protected $primaryKey = 'supplier_id, book_id';

    protected $fillable = ['supplier_id', 'book_id'];
}
