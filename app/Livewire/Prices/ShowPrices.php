<?php

namespace App\Livewire\Prices;
use Livewire\Component;
use App\Models\Plan;

class ShowPrices extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = Plan::all();
    }

    public function render()
    {
        return view('livewire.prices.show-prices ');
    }
}


