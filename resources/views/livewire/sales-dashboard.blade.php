<div wire:poll.1s>
    <div class="row border border-dark rounded">
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rounded-left">
            <strong class="h1 font-weight-bold"> {{$newOrders}}
            </strong>
            <h3 class="text-secondary">Nouvelles Commandes</h3>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5">
            <strong class="h1 font-weight-bold">{{$salesAmount}}
            </strong>
            <h3 class="text-secondary">Montant des ventes</h3>
        </div>
        <div class="col-md-4 bg-white text-primary py-5 rounded-right rounded-bottom">
            <strong class="h1 font-weight-bold">{{$satisfactions}}%
            </strong>
            <h3 class="text-secondary">Satisfaction</h3>
        </div>
    </div>

    <button class="btn btn-primary mt-5" wire:click="$refresh">↻ Refresh</button>
</div>




