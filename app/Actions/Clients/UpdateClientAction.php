<?php
namespace App\Actions\Clients;
use App\Models\Client;
class UpdateClientAction
{
    public function handle(Client $Client,array $data): Client
    {
       $Client->update($data);
        return $Client;
    }
}
