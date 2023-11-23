<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutForm extends Component
{
    protected $rules = [
        'date' => 'required|date',
        'name' => 'required|max:255',
        'gender' => 'required|integer',
        'email' => 'required|email',
        'phone' => 'required|max:255',
        'institution' => 'required|max:255',
        'event' => 'required|max:255',
        'description' => 'required|max:1000',
    ];

    public function submit()
      {
        $this->validate($this->rules);
        // dd($this);
        return view('livewire.checkout-success')->layout('layouts.app');
      }

    public function render()
    {
        return view('livewire.checkout-form')->layout('layouts.app');
    }
}
