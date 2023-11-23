<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutForm extends Component
{

    public $name;
    public $gender;
    public $email;
    public $phone;
    public $institution;
    public $event_type;
    public $event_name;
    public $description;

    protected $rules = [
        // 'date' => 'required|date',
        'name' => 'required|max:255',
        'gender' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required|max:255',
        'institution' => 'required|max:255',
        'event_name' => 'required|max:255',
        'event_type' => 'required|max:255',
        'description' => 'required|max:1000',
    ];

    public function submit()
      {
        // dd($this);
        // $this->validate($this->rules);
        // dd($this);
        return view('livewire.checkout-success')->layout('layouts.app');
      }

    public function render()
    {
        return view('livewire.checkout-form')->layout('layouts.app');
    }
}
