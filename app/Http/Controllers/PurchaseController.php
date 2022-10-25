<?php

namespace App\Http\Controllers;

use App\Http\Requests\Purchases\StorePurchasesRequest;
use App\Models\Purchases;
use App\ViewModels\Typesofweight\PurchasesViewModel;
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
        return view("purchases.create",new PurchasesViewModel());;
    }
    public function store(StorePurchasesRequest $request)
    {
    app(StorePurchasesAction::class)->handle($request->validated());
    return \redirect()->route('clients.index')->with('add','Success clients data');     
    }
    public function edit(Client $client):View
    {
        return view("clients.create",new ClientViewModel($client));

    }
    public function update(StorePurchasesRequest $request,Client $client)
    {
        app(UpdateClientAction::class)->handle($client,$request->validated());
        return \redirect()->route('clients.index')->with('edit','Success edit data');  
    }
    public function destroy(Client $client)
    {
        $client->delete();
        return \redirect()->route('clients.index')->with('delete','Success delete data');  
    }
}
