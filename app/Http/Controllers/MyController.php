<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\UsersImport;
use App\Imports\Import;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Entity\Product\ProductCategories;


class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    { 
        Excel::import(new UsersImport,request()->file('file'));       
        Excel::import(new Import,request()->file('file'));       
        return back();
    }
}
