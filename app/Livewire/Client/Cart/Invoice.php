<?php

namespace App\Livewire\Client\Cart;

use Livewire\Component;

class Invoice extends Component
{
    public $invoice;
    public function render()
    {
        return view('livewire.client.cart.invoice');
    }
}
