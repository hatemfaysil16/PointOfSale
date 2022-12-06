<?php
namespace App\ViewModels\Client;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Invoices_account;
use Illuminate\Support\Facades\DB;
use Spatie\ViewModels\ViewModel;

class ClientViewModel extends ViewModel
{
    public  $Client;
    public  $type;
    public  $ShowInvoices_account;
    // public  $payments;
    public $ClientBalance;

    public function __construct($Client = null)
    {
        $this->type = is_null($Client)?'Add':'Edit' ; 
        // $this->payments = is_null($Client)?'':
        //     DB::table('payments')
        //     ->selectRaw('sum(totalInvoice) as totalInvoice, sum(amount) as amount, (sum(totalInvoice)-sum(amount)) as total_balance')
        //     ->where('clients_id', $Client->id)
        //     ->first();; 
        $this->Client = is_null($Client) ? new Client(old()) : $Client;
        $this->ShowInvoices_account = is_null($Client)?'':Invoices_account::where('clients_id',$Client->id)->paginate(10); 
        $this->ClientBalance = is_null($Client) ? '' :
        DB::table('invoices_accounts')
        ->where('clients_id', $Client->id)
        ->get()->sum('Left');

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
