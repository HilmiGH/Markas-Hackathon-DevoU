<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutCalendar extends Component
{
    public function render()
    {
        return view('livewire.checkout-calendar')->layout('layouts.app');
    }
}
