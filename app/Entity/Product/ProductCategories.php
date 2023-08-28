<?php

namespace App\Entity\Product;

use Illuminate\Database\Eloquent\Model;
class ProductCategories extends Model
{
	
	protected $fillable = ['product_id','category_id'];
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_categories';
}