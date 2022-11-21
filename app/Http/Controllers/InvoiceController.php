<?php

namespace App\Http\Controllers;
use App\Actions\Warehouse\SellWarehouseAction;
use App\Http\Requests\Invoices\InvoicesAccountRequest;
use App\Http\Requests\Invoices\InvoicesRequest;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Invoices_account;
use App\Models\Product;
use App\ViewModels\Invoices\InvoicesViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices_account = Invoices_account::Search();
        return view("invoices.index",\compact('invoices_account'));
    }
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

    public function store(InvoicesRequest $request)
    {
        $Invoices_account = Invoices_account::where('users_id',Auth::user()->id)->latest()->first();
        if(!empty($Invoices_account)){
            $number =$Invoices_account->number+1;
        }else{
            $number = 1;
        }
        Invoice::create($request->validated()+['users_id'=>Auth::user()->id]+['invoicenumber'=>$number]);
        return \redirect()->route('invoices.create')->with('add','Success create data');     
    }

    public function  storeInvoicesaccount(InvoicesAccountRequest $request){
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

        $Invoices_account = Invoices_account::where('users_id',Auth::user()->id)->latest()->first();
        if(!empty($Invoices_account)){
            $number =$Invoices_account->number+1;
        }else{
            $number = 1;
        }

        $dataInvoices= Invoices_account::create($request->validated()+['number'=>$number]+['users_id'=>Auth::user()->id]);
        $Invoice = Invoice::where('users_id',Auth::user()->id)->where('invoicenumber',$dataInvoices->number)->get()->pluck('id');
        foreach($Invoice as $id){Invoice::find($id)->update(['type'=>'accept']);}
        $dataInvoice = Invoice::where('users_id',Auth::user()->id)->where('invoicenumber',$dataInvoices->number)->get();
        app(SellWarehouseAction::class)->handle($dataInvoice);
        return \redirect()->route('invoices.index')->with('add','Success create data');     
    }


    public function show($id)
    {
        $invoices_account = Invoices_account::find($id);
        return view("invoices.show",new InvoicesViewModel($invoices_account));
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
