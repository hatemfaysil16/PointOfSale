<?php
namespace App\ViewModels\Client;
use App\Models\Client;
use Spatie\ViewModels\ViewModel;

class ClientViewModel extends ViewModel
{
    public  $Client;
    public  $type;

    public function __construct($Client = null)
    {
        $this->type = is_null($Client)?'Add':'Edit' ; 
        $this->Client = is_null($Client) ? new Client(old()) : $Client;
    }

    public function action(): string
    {
        return is_null($this->Client->id)
            ? route('clients.store')
            : route('clients.update',$this->Client->id);
    }

    public function method(): string
    {
        return is_null($this->Client->id) ? 'POST' : 'PUT';
    }
}
