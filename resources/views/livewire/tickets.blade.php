<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px">
    <div class="card" style="padding: 10px">
        <div class="card-header">
            <h4>Support Tickets</h4>
        </div>

        @foreach($tickets as $ticket)
            <div class="card" style="margin-top: 10px; cursor:pointer;">
                <div class="card-body {{$active == $ticket->id ? 'bg-light': ''}}" wire:click="$emit('selectedTicket', {{$ticket->id}})">
                    <p class="card-text">{{$ticket->question}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
