<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutSuccess extends Component
{
    public function render()
    {
        return view('livewire.checkout-success')->layout('layouts.app');
    }
}
