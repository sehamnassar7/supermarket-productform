<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    protected $fillable=[
        'product_index',
        'product_name',
        'product_price',
        'detail',
        'image'];
        protected $dates =['deleted_at'];
        use SoftDeletes;
}
