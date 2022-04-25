<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultor extends Model
{
    protected $table = 'products_am';
    protected $primaryKey = 'product_id';
	
	public function category()
    {
    	return $this->belongsTo(Category::class, 'product_id');
    }
}
