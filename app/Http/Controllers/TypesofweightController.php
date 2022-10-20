<?php

namespace App\Http\Controllers;

use App\Actions\Typesofweight\StoreTypesofweightAction;
use App\Actions\Typesofweight\UpdateTypesofweightAction;
use App\Http\Requests\Typesofweight\StoreTypesofweightRequest;
use App\Models\Typesofweight;
use App\ViewModels\Typesofweight\TypesofweightViewModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypesofweightController extends Controller
{
    public function index():View
    {
        $Typesofweight = Typesofweight::paginate(5);
        return view("typesofweight.index",compact('Typesofweight'));
    }

    public function create():View
    {
        return view("typesofweight.create",new TypesofweightViewModel());
    }
    public function store(StoreTypesofweightRequest $request)
    {
        app(StoreTypesofweightAction::class)->handle($request->all());
        return \redirect()->route('typesofweight.index');
    }

    public function edit(Typesofweight $typesofweight)
    {
        return view("typesofweight.create",new TypesofweightViewModel($typesofweight));
    }
    public function update(StoreTypesofweightRequest $request, $id)
    {
        app(UpdateTypesofweightAction::class)->handle($request->all(),$id);
        return \redirect()->route('typesofweight.index');
    }
    public function destroy(Typesofweight $typesofweight)
    {
        $typesofweight->delete();
        return \redirect()->route('typesofweight.index');
    }
}
