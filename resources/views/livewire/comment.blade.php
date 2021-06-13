<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form wire:submit.prevent="addComment">
        <div class="input-group">
            <input type="text" wire:model.debounce.500ms="comment" class="form-control" placeholder="Write comment here...">
            <div class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i> Post
                </button>
            </div>
        </div>
        @error('comment')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </form>

    @foreach($comments as $comment)
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-body">
                <p class="panel-title" style="margin-bottom: 5px">
                    <span><strong>{{$comment->user->name}} </strong></span>
                    <span style="font-size: 12px">{{$comment->created_at->diffforhumans()}}</span>
                    <span class="btn text-danger pull-right">
                        <strong>
                            <i class="fa fa-trash-o" onclick="return confirm('Are you sure you want to remove this comment?') || event.stopImmediatePropagation()"
                               wire:click="removeComment({{$comment->id}})" style="font-size: 20px"></i>
                        </strong>
                    </span>
                </p>
                <p class="card-text">{{$comment->body}}</p>
            </div>
        </div>
    @endforeach
    {{$comments->links()}}
</div>
