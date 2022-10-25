<?php

namespace App\Http\Controllers;

use App\Actions\Clients\StoreClientAction;
use App\Actions\Clients\UpdateClientAction;
use App\Http\Requests\Client\StoreClientRequest;
use App\Models\Client;
use App\ViewModels\Client\ClientViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index():View
    {
        $Client = Client::Search();
        return view("clients.index",\compact('Client'));
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
}
