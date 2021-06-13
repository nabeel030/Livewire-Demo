<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px">
    <div class="panel panel-default" style="padding: 10px">
        <div class="panel-heading">
            <h4>Support Tickets</h4>
        </div>

        @foreach($tickets as $ticket)
            <div class="panel panel-default" style="margin-top: 10px; cursor:pointer;">
                <div class="panel-body {{$active == $ticket->id ? 'bg-info': ''}}" wire:click="$emit('selectedTicket', {{$ticket->id}})">
                    <p class="panel-text">{{$ticket->question}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
