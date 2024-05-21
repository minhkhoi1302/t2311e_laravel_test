<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ProductType', 'ProductCode', 'ProductName', 'Quantity', 'Note'
    ];

    // Define any relationships if applicable
}
