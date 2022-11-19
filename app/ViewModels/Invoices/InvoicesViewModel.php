<?php
namespace App\ViewModels\Invoices;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Spatie\ViewModels\ViewModel;

class InvoicesViewModel extends ViewModel
{
    public  $Invoice;
    public  $type;
    public  $client;
    public  $product;
    public  $DataInvoices;
    public  $DataInvoicesCount;
    public  $Invoice_number;
    public  $clientId;
    public  $ShowDataInvoices;

    public function __construct($Invoice = null)
    {
        $this->ShowDataInvoices = is_null($Invoice) ? new Invoice(old()) : Invoice::where('type','accept')->where('users_id',Auth::user()->id)->where('invoicenumber',$Invoice->number)->paginate(5);

        $this->type = is_null($Invoice)?'Add':'Edit' ; 
        $this->client = Client::get();
        $this->product = Product::get();
        $this->DataInvoices = Invoice::where('type','waiting')->where('users_id',Auth::user()->id)->paginate(5);
        $this->DataInvoicesCount = Invoice::where('type','waiting')->where('users_id',Auth::user()->id)->count();
        $this->Invoice = is_null($Invoice) ? new Invoice(old()) : $Invoice;
    }

    public function action(): string
    {
        return is_null($this->Invoice->id)
            ? route('invoices.store')
            : route('invoices.update',$this->Invoice->id);
    }

    public function method(): string
    {
        return is_null($this->Invoice->id) ? 'POST' : 'PUT';
    }
}
