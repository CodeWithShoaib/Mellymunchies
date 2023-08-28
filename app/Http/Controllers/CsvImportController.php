<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use League\Csv\Reader;
use Illuminate\Support\Str;
use App\Entity\Product\Product;
use App\Entity\Category\Category;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Entity\Brand\Brand;
use App\Media;
use Auth;


class CsvImportController extends Controller
{
    // public function uploadCsv(Request $request)
    // {

    //     if ($request->hasFile('csv_file')) {
    //         $file = $request->file('csv_file');
    //         $path = $file->getRealPath();
    //         $data = array_map('str_getcsv', file($path));
          
    //         foreach ($data as $row) {
    //             // Assuming the CSV columns are: column1, column2, ...
    //             DB::table('product_with_csv')->insert([
    //                 'id' => $row[0],
    //                 'locale' => $row[1],
    //                 'name' => $row[2],
    //                 'description' => $row[3],
    //                 'short_description' => $row[4],
    //                 'product_id' => $row[5],
    //                 'created_at' => $row[6],
    //                 'updated_at' => $row[7],
    //                 // Add more columns as needed
    //             ]);
    //         }
    //         return redirect()->back()->with('success', 'CSV data imported successfully.');
    //     }

    //     return redirect()->back()->with('error', 'Failed to upload CSV file.');
    // }





    // public function uploadProductCsv(Request $request)
    // {

    //     if ($request->hasFile('csv_file')) {
    //         $file = $request->file('csv_file');
    //         $path = $file->getRealPath();
    //         $data = array_map('str_getcsv', file($path));
    //         foreach ($data as $row) {
    //             // Assuming the CSV columns are: column1, column2, ...
    //             DB::table('product_with_csv')->insert([
    //                 'id' => $row[0],
    //                 'brand_id' => $row[1],
    //                 'tax_class_id' => $row[2],
    //                 'slug' => $row[3],
    //                 'product_type' => $row[4],
    //                 'price' => $row[5],
    //                 'special_price' => $row[6],
    //                 'special_price_start' => $row[7],
    //                 'special_price_end' => $row[8],
    //                 'sku' => $row[9],
    //                 'manage_stock' => $row[10],
    //                 'qty' => $row[11],
    //                 'in_stock' => $row[12],
    //                 'viewed' => $row[13],
    //                 'is_active' => $row[14],
    //                 'featured_tag' => $row[15],
    //                 'digital_file' => $row[16],
    //                 'created_at' => $row[17],
    //                 'created_at' => $row[18],
    //                 // Add more columns as needed
    //             ]);
    //         }
    //         return redirect()->back()->with('success', 'CSV data imported successfully.');
    //     }

    //     return redirect()->back()->with('error', 'Failed to upload CSV file.');
    // }












    // public function uploadProductCsv(Request $request)
    // {
    //     $request->validate([
    //         'csv_file' => 'required|mimes:csv,txt',
    //     ]);
    //     $csvPath = $request->file('csv_file')->store('csv_files'); // Store in storage/app/csv_files
    //     $csv = Reader::createFromPath(storage_path('app/' . $csvPath), 'r');
    //     $csv->setHeaderOffset(0);
    //     foreach ($csv->getRecords() as $record) {
    //         $slug = Str::slug($record['Title']);
    //         $duplication = Product::where('slug',$slug)->first();
    //         $dup=0;
    //         $ins=0;
    //         if($duplication){
    //             $dup++;
    //         }else{
    //             $ins++;
    //             if($record['brand']){
    //                 $brandslug = Str::slug($record['brand']);
    //                 $brand = DB::table('brands')->where('slug', 'like', '%' . $brandslug . '%')->first();   
    //             }
    //             $data = Product::create([
    //                 'slug' => $slug,
    //                 'product_type' => $record['product type'],
    //                 'price' => $record['Price'],
    //                 'sku' => $record['SKU'],
    //                 'manage_stock' => 1,
    //                 'in_stock' => 1,
    //                 'manage_stock' => '1',
    //                 'is_active' => '1',
    //                 'qty' => $record['Quantity'],
    //                 'brand_id ' => $brand ? $brand->id : ''
    //             ]);
    //         if($record['category']){
    //             $Categoryslug = Str::slug($record['category']);    
    //             $category = DB::table('category')->where('slug', 'like', '%' . $Categoryslug . '%')->first();   
    //             DB::table('product_categories')->insert([
    //                 'product_id' => $data->id,
    //                 'category_id' => $category->id,
    //         ]);
    //         }
    //         if($record['Title']){  
    //             DB::table('product_translations')->insert([
    //                 'product_id' => $data->id,
    //                 'locale' => 'English',
    //                 'name' => $record['Title'],
    //                 'description' => $record['Description'] ? $record['Description'] : '' ,
    //                 'short_description' => $record['Short Description'] ? $record['Short Description'] : '' ,
    //         ]);
    //         }
    //     }
      
    //     return redirect()->back()->with('success','Csv upload Successfully! and data is inserted '.$ins.' and the data which is not inserted is '. $dup);
    // }

    
    // }







    public function uploadProductCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);
        $csvPath = $request->file('csv_file')->store('csv_files');
        $csv = Reader::createFromPath(storage_path('app/' . $csvPath), 'r');
        $csv->setHeaderOffset(0);

        $ins = 0;
        $dup = 0;

        foreach ($csv->getRecords() as $record) {
            $slug = Str::slug($record['Title']);
            $duplication = Product::where('slug', $slug)->first();
            if ($duplication) {
                $dup++;
            } else {
                $ins++;
                $brand = null;
                if ($record['brand']) {
                    $brandslug = Str::slug($record['brand']);
                    $brand = DB::table('brands')->where('slug', 'like', '%' . $brandslug . '%')->first();
                }

                $data = Product::create([
                    'slug' => $slug,
                    'product_type' => $record['product type'] ? $record['product type'] : '',
                    'price' => $record['Price'] ? $record['Price'] : '' ,
                    'sku' => $record['SKU'] ? $record['SKU'] : '' ,
                    'manage_stock' => 1,
                    'in_stock' => 1,
                    'is_active' => 1,
                    'qty' => $record['Quantity'] ? $record['Quantity'] : '' ,
                    'brand_id' => $brand ? $brand->id : null,
                ]);

                if ($record['category']) {
                    $Categoryslug = Str::slug($record['category']);
                    $category = DB::table('category')->where('slug', 'like', '%' . $Categoryslug . '%')->first();
                    if ($category) {
                        DB::table('product_categories')->insert([
                            'product_id' => $data->id,
                            'category_id' => $category->id,
                        ]);
                    }
                }

                if ($record['Title']) {
                    DB::table('product_translations')->insert([
                        'product_id' => $data->id,
                        'locale' => 'English',
                        'name' => $record['Title'],
                        'description' => $record['Description'] ?? '',
                        'short_description' => $record['Short Description'] ?? '',
                    ]);
                }
            }
        }
        return redirect()->back()->with('success', 'CSV upload successful! Data inserted: ' . $ins . ', duplicates: ' . $dup);
    }
    public function uploadCategoryCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $csvPath = $request->file('csv_file')->store('csv_files');

        $csv = Reader::createFromPath(storage_path('app/' . $csvPath), 'r');
        $csv->setHeaderOffset(0);
        $ins = 0;
        $dup = 0;

        foreach ($csv->getRecords() as $record) {
            $slug = Str::slug($record['Name']);
       
            $duplication = Category::where('slug', $slug)->first();
            if ($duplication) {
                $dup++;
            } else {
             
                $ins++;
                $category=new Category;
                $category->slug=$slug;
                $category->save();

                if ($record['Name']) {
                    DB::table('category_translation')->insert([
                        'category_id' => $category->id,
                        'locale' => 'English',
                        'name' => $record['Name'],
                        'description' => $record['Description'] ?? ''
                    ]);
                }
            }
        }
        return redirect()->back()->with('success', 'CSV upload successful! Data inserted: ' . $ins . ', duplicates: ' . $dup);
    }






    public function uploadBrandCsv(Request $request)
    {

        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $csvPath = $request->file('csv_file')->store('csv_files');
        $csv = Reader::createFromPath(storage_path('app/' . $csvPath), 'r');
        $csv->setHeaderOffset(0);
        $ins = 0;
        $dup = 0;

        foreach ($csv->getRecords() as $record) {
            $slug = Str::slug($record['Name']);
            $duplication = Brand::where('slug', $slug)->first();
            if ($duplication) {
                $dup++;
            } else {
             
                $ins++;
                $brand=new Brand;
                $brand->slug=$slug;
                $brand->save();
                if ($record['Name']) {
                    DB::table('brands_translation')->insert([
                        'brand_id' => $brand->id,
                        'locale' => 'English',
                        'name' => $record['Name'],
                    ]);
                }
            }
        }
        return redirect()->back()->with('success', 'CSV upload successful! Data inserted: ' . $ins . ', duplicates: ' . $dup);
    }





 

    



    function downloadImageFromUrl() {
        // Get the image data using the URL
        $imageUrl = 'https://telewellnessmd.com/around_assets/newproducts/dihexa10mg.jpg';
        $response = Http::get($imageUrl);
        $imageOrignalName = basename($imageUrl);
        // Check if the request was successful
        if ($response->successful()) {
            // Generate a unique hash-based filename
            $imageContent = $response->body();
            $imageName = hash('sha256', $imageContent) . '.jpg';
            // Store the image in the storage
            Storage::put('media/' . $imageName, $imageContent);
            // Create a new Media record
            $media = new Media();
            $media->file_path = 'media/'.$imageName; // Set the file name
            $media->filename = $imageOrignalName; // Set the file name
            $media->file_type = 'image/jpeg'; // You might need to adjust this based on the image type
            $media->file_size = strlen($imageContent);
            $media->file_extension = 'jpg'; // Set the file extension
            $media->user_id = Auth::id(); // Assuming you have authentication in place
            $media->save();
            
            return 'Image downloaded and stored successfully!';
        } else {
            return 'Failed to download the image.';
        }
    }
    

 
    
    
    
    
    
    
    
    
    


  

      

    


   
  
}
