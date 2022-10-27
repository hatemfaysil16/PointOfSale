<?php

namespace App\Http\Controllers;

use App\Actions\Product\StoreProductAction;
use App\Actions\Product\UpdateProductAction;
use App\helpers\HandleImage;
use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Product;
use App\Models\Typesofweight;
use App\ViewModels\Product\productViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use HandleImage;

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
    app(StoreProductAction::class)->handle($request->validated());
    return \redirect()->route('products.index')->with('add','Success create data');     
    }

    public function edit(Product $Product):View
    {
        return view("products.create",new productViewModel($Product));
    }
    public function update(StoreProductRequest $request,Product $product)
    {
        app(UpdateProductAction::class)->handle($product,$request->validated());
        return \redirect()->route('products.index')->with('edit','Success edit data');  
    }
    public function destroy(Product $Product)
    {
        $Product->delete();
        return \redirect()->route('products.index')->with('delete','Success delete data');    
    }
}
