<?php

namespace App\Http\Controllers;

use App\Actions\Clients\StoreClientAction;
use App\Actions\Clients\UpdateClientAction;
use App\Http\Requests\Client\ClientPullRequest;
use App\Http\Requests\Client\ClientPushRequest;
use App\Http\Requests\Client\StoreClientRequest;
use App\Models\Client;
use App\Models\Invoices_account;
use App\Models\Payment;
use App\ViewModels\Client\ClientViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function index():View
    {
        $Client = Client::Search();
        return view("clients.index",\compact('Client'));
    }
    public function show(Client $client){
        return view("clients.show", new ClientViewModel($client));
    }
    public function create():View
    {
        return view("clients.create",new ClientViewModel());
    }

    public function store(StoreClientRequest $request)
    {
    app(StoreClientAction::class)->handle($request->validated());
    return \redirect()->route('clients.index')->with('add','Success clients data');     
    }
    public function edit(Client $client):View
    {
        return view("clients.create",new ClientViewModel($client));
    }
    public function update(StoreClientRequest $request,Client $client)
    {
        app(UpdateClientAction::class)->handle($client,$request->validated());
        return \redirect()->route('clients.index')->with('edit','Success edit data');  
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return \redirect()->route('clients.index')->with('delete','Success delete data');  
    }
    public function withdraw(Request $request){
        $Invoices_account = Invoices_account::where('users_id',Auth::user()->id)->latest()->first();
        if(!empty($Invoices_account)){
            $number =$Invoices_account->number+1;
        }else{
            $number = 1;
        }
        $clientBalance = DB::table('invoices_accounts')
        ->where('clients_id', $request->clients_id)
        ->get()->sum('Left');
        Invoices_account::create([
            'clients_id'=>$request->clients_id,
            'Left' => 0 - $request->amount,
            'total'=>0,
            'subtotal'=>0,
            'tax'=>0,
            'paid'=>0,
            'additionalDiscount'=>0,
            'users_id'=> Auth::user()->id,
            'number'=>$number,
            'totalpacks'=> 0,
            'customerbalance'=> $clientBalance,
            'date'=> now(),
            'shipTo_name' => 'Withdrawing Money',
            'shiptTo_companyName' => 'Withdrawing Money',
            'shiptTo_address'=> 'Withdrawing Money',
            'shiptTo_city'=> 'Withdrawing Money',
            'shiptTo_state' => 'Withdrawing Money',
            'shiptTo_postalCode' => 'Withdrawing Money',
            'shiptTo_phone' => 'Withdrawing Money'
        ]);
        // Payment::create([
        //     'clients_id'=>$request->clients_id,
        //     'totalInvoice'=>0,
        //     'amount'=>$request->amount,
        //     'net'=>0 - $request->amount,
        // ]);        
        return \redirect()->Back()->with('success','Success withdraw');  
    }
    public function insert(Request $request){
        $Invoices_account = Invoices_account::where('users_id',Auth::user()->id)->latest()->first();
        if(!empty($Invoices_account)){
            $number =$Invoices_account->number+1;
        }else{
            $number = 1;
        }
        $clientBalance = DB::table('invoices_accounts')
        ->where('clients_id', $request->clients_id)
        ->get()->sum('Left');
        Invoices_account::create([
            'clients_id'=>$request->clients_id,
            'Left' => $request->amount,
            'total'=>0,
            'subtotal'=>0,
            'tax'=>0,
            'paid'=>0,
            'additionalDiscount'=>0,
            'users_id'=> Auth::user()->id,
            'number'=>$number,
            'totalpacks'=> 0,
            'customerbalance'=> $clientBalance,
            'date'=> now(),
            'shipTo_name' => 'Inserting Money',
            'shiptTo_companyName' => 'Inserting Money',
            'shiptTo_address'=> 'Inserting Money',
            'shiptTo_city'=> 'Inserting Money',
            'shiptTo_state' => 'Inserting Money',
            'shiptTo_postalCode' => 'Inserting Money',
            'shiptTo_phone' => 'Inserting Money'
        ]);
        // Payment::create([
        //     'clients_id'=>$request->clients_id,
        //     'totalInvoice'=>$request->totalInvoice,
        //     'amount'=>0,
        //     'net'=>$request->totalInvoice - 0,
        // ]);        
        return \redirect()->Back()->with('success','Success insert');  
    }
}
