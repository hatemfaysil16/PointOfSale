<?php

namespace App\Http\Controllers;

use App\Actions\Purchases\StorePurchasesAction;
use App\Actions\Purchases\UpdatePurchasesAction;
use App\Http\Requests\Purchases\StorePurchasesRequest;
use App\Models\Product;
use App\Models\Purchase;
use App\ViewModels\Purchases\PurchasesViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index():View
    {
        $Purchases = Purchase::Search();
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
    public function edit(Purchase $purchase)
    {
        return view("purchases.create",new PurchasesViewModel($purchase));
    }
    public function update(StorePurchasesRequest $request,Purchase $purchase)
    {
        app(UpdatePurchasesAction::class)->handle($purchase,$request->validated());
        return \redirect()->route('purchases.index')->with('edit','Success edit data');  
    }
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return \redirect()->route('purchases.index')->with('delete','Success delete data');  
    }
}
