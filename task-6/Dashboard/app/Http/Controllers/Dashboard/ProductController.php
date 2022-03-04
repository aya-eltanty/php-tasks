<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id','name_en','code','price','status','quantity','created_at')->get();
        return view('dashboard.products.index',compact('products'));
    }
    public function create()
    {
        $brands = DB::table('brands')->select('name_en','id')->get();
        $subcategories = DB::table('sub_categories')->select('name_en','id')->get();
        return view('dashboard.products.create',compact('brands','subcategories'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name_en'=>['required','string','between:3,255'],
            'name_ar'=>['required','string','between:3,255'],
            'price'=>['required','numeric','max:999999.99','min:0.5'],
            'quantity'=>['nullable','integer','between:1,9999'],
            'code'=>['required','unique','products,code','digits:5'],
            'status'=>['nullable','integer',Rule::in([0,1])],
            'des_en'=>['required','string'],
            'des_ar'=>['required','string'],
            'brand_id'=>['nullable','integer','exists:brands,id'],
            'subcategory_id'=>['required','integer','exists:sub_categories,id'],
            'image'=>['required','max:1024','mimes:png,jpg,jpeg'],
        ];
        $request->validate($rules);
    

    }
}
