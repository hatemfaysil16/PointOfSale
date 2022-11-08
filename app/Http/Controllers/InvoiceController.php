<?php

namespace App\Http\Controllers;

use App\Actions\Invoice\StoreInvoiceAction;
use App\Http\Requests\Invoices\InvoicesRequest;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use App\ViewModels\Invoices\InvoicesViewModel;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("invoices.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("invoices.create",new InvoicesViewModel());
    }


    public function ajaxProducts(Product $product){
        return $product;
    }

    public function ajaxClient(Client $client){
        return $client;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoicesRequest $request)
    {
        if($request->checkbox == ['on']){
        }else{
          $Client = Client::find($request->clients_id);
          if(!empty($request->name)){
          $Client->name = $request->name;
          }
          if(!empty($request->street)){
          $Client->street = $request->street;
          }
          if(!empty($request->CompanyState)){
          $Client->CompanyState = $request->CompanyState;
          }
          if(!empty($request->phone)){
          $Client->phone = $request->phone;
          }
          if(!empty($request->companyName)){
          $Client->companyName = $request->companyName;
          }
          if(!empty($request->companyName)){
          $Client->companyName = $request->companyName;
          }
          if(!empty($request->companyCity)){
          $Client->companyCity = $request->companyCity;
          }
          if(!empty($request->PostalCode)){
          $Client->PostalCode = $request->PostalCode;
          }
          $Client->save();
        }

        Invoice::create([
            'invoicetype'=>$request->invoicetype,
            'date'=>$request->date,
            'clients_id'=>$request->clients_id,
            'products_id'=>$request->products_id,
            'qty'=>$request->qty,
        ]);

        return \redirect()->route('invoices.create')->with('add','Success create data');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("invoices.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return \redirect()->route('invoices.create')->with('delete','Success delete data');     
    }
}
