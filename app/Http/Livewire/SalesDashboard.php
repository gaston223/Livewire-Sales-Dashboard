<?php

namespace App\Http\Livewire;

use App\Services\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{


    public function render()
    {
        return view('livewire.sales-dashboard', [
            'newOrders'=> Stats::newOrders(),
            'salesAmount'=> Stats::salesAmount(),
            'satisfactions'=> Stats::satisfactions()
        ]);
    }

//$this->satisfactions = file_get_contents("https://blockchain.info/tobtc?currency=EUR&value=1");
}
