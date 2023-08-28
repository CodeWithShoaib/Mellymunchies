<?php

namespace App\Imports;

use App\Entity\Product\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'brand_id'    => $row['brand_id'], 
            'tax_class_id'    => $row['tax_class_id'], 
            'slug'    => $row['slug'], 
            'product_type'    => $row['product_type'], 
            'price'    => $row['price'], 
            'special_price'    => $row['special_price'], 
            'special_price_start'    => $row['special_price_start'], 
            'special_price_end'    => $row['special_price_end'], 
            'sku'    => $row['sku'], 
            'manage_stock'    => $row['manage_stock'], 
            'qty'    => $row['qty'], 
            'in_stock'    => $row['in_stock'], 
            'viewed'    => $row['viewed'], 
            'is_active'    => $row['is_active'], 
            'featured_tag'    => $row['featured_tag'], 
            'digital_file'    => $row['digital_file'], 
            'created_at'    => $row['created_at'], 
            'updated_at'    => $row['updated_at'], 
        ]);
    }
}
