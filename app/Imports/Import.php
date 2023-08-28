<?php

namespace App\Imports;

use App\Entity\Product\ProductCategories;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProductCategories([
            'product_id'    => $row['product_id'], 
            'category_id'    => $row['category_id'],   
        ]);
    }
}
               