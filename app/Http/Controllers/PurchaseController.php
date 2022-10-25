<?php

namespace App\Http\Controllers;

use App\Actions\Purchases\StorePurchasesAction;
use App\Http\Requests\Purchases\StorePurchasesRequest;
use App\Models\Product;
use App\Models\Purchases;
use App\ViewModels\Purchases\PurchasesViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index():View
    {
        $Purchases = Purchases::Search();
        return view("purchases.index",\compact('Purchases'));
    }
    public function create():View
    {
        return view("purchases.create",new PurchasesViewModel());
    }
    public function store(StorePurchasesRequest $request)
    {
    app(StorePurchasesAction::class)->handle($request->validated());
    return \redirect()->route('purchases.index')->with('add','Success purchases data');     
    }
    public function edit(Purchases $purchases):View
    {
        return view("purchases.create",new PurchasesViewModel($purchases));
    }
    public function update(StorePurchasesRequest $request,Purchases $purchases)
    {
        app(UpdatePurchasesAction::class)->handle($purchases,$request->validated());
        return \redirect()->route('purchases.index')->with('edit','Success edit data');  
    }
    public function destroy(Purchases $purchases)
    {
        $purchases->delete();
        return \redirect()->route('purchases.index')->with('delete','Success delete data');  
    }
}
