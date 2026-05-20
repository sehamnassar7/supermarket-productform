<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=[
        'product_index',
        'product_name',
        'product_price',
        'detail'];
}
