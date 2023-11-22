<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutForm extends Component
{
    public function render()
    {
        return view('livewire.checkout-form')->layout('layouts.app');
    }
}
