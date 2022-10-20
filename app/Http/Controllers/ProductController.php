<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Product;
use App\Models\Typesofweight;
use App\ViewModels\Product\productViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index():View
    {
        $Product = Product::Search();
        return view("products.index",\compact('Product'));
    }
    public function create():View
    {
        return view("products.create",new productViewModel());
    }
    public function store(StoreProductRequest $request)
    {
     app(StoreProductAction::class)->handle($request->all());
    return \redirect()->route('products.index')->with('add','Success create data');     
    }

    public function edit(Product $Product):View
    {
        return view("products.create",new productViewModel($Product));
    }
    public function update(StoreProductRequest $request, $id)
    {
        app(UpdateProductAction::class)->handle($request->all(),$id);
        return \redirect()->route('products.index')->with('edit','Success edit data');  
    }
    public function destroy(Product $Product)
    {
        $Product->delete();
        return \redirect()->route('products.index')->with('delete','Success delete data');    
    }
}
