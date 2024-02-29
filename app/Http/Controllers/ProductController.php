<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $listSP=Product::all();
         return view('danh-sach',compact('listSP'));
    }
}
