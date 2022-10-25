<?php

namespace App\Http\Controllers;
use App\Actions\Typesofweight\StoreTypesofweightAction;
use App\Actions\Typesofweight\UpdateTypesofweightAction;
use App\Http\Requests\Typesofweight\StoreTypesofweightRequest;
use App\Models\Typesofweight;
use App\ViewModels\Typesofweight\TypesofweightViewModel;
use Illuminate\View\View;
class TypesofweightController extends Controller
{
    public function index():View
    {
        $Typesofweight = Typesofweight::Search();
        return view("typesofweight.index",compact('Typesofweight'));
    }
    public function create():View
    {
        return view("typesofweight.create",new TypesofweightViewModel());
    }
    public function store(StoreTypesofweightRequest $request)
    {
        app(StoreTypesofweightAction::class)->handle($request->validated());
        return \redirect()->route('typesofweight.index')->with('add','Success create data');     
    }
    public function edit(Typesofweight $typesofweight):View
    {
        return view("typesofweight.create",new TypesofweightViewModel($typesofweight));
    }
    public function update(StoreTypesofweightRequest $request,Typesofweight $typesofweight)
    {
        app(UpdateTypesofweightAction::class)->handle($typesofweight,$request->validated());
        return \redirect()->route('typesofweight.index')->with('edit','Success edit data');     
    }
    public function destroy(Typesofweight $typesofweight)
    {
        $typesofweight->delete();
        return \redirect()->route('typesofweight.index')->with('delete','Success delete data');    
    }
}
