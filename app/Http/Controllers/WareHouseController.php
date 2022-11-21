<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WareHouseController extends Controller
{
    public function index()
    {
        $warehouse = Warehouse::paginate(15);
        return view("warehouse.index",compact('warehouse'));
    }
    public function show(Warehouse $warehouse)
    {
        // $product = Product::find($id);
        return view("warehouse.show",\compact('warehouse'));
    }
}
