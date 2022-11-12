<?php
namespace App\ViewModels\Invoices;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\invoices_number;
use App\Models\Product;
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

    public function __construct($Invoice = null)
    {
        $this->type = is_null($Invoice)?'Add':'Edit' ; 
        $this->client = Client::get();
        $this->Invoice_number = is_null(invoices_number::first())?'0001':invoices_number::first();
        // dd($this->Invoice_number);
        $this->product = Product::get();
        $this->DataInvoices = Invoice::paginate(5);
        $this->DataInvoicesCount = Invoice::count();
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
