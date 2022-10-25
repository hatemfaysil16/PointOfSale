<?php
namespace App\Actions\Clients;

use App\Models\Client;

class StoreClientAction
{
    public function handle(array $data): Client
    {
        $Client = Client::create($data);
        return $Client;
    }
}
