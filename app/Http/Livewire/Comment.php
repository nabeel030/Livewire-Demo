<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comment as CommentModel;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;

    public $comment;
    public $ticketID;

    protected $listeners = ['selectedTicket' => 'selectedTicket'];

    public function updated($field) {
        $this->validateOnly($field, ['comment' => 'required|min:3|max:255']);

    }
    public function addComment() {

        $this->validate(['comment' => 'required|min:3|max:255']);

        $newComment = CommentModel::create([
            'body' => $this->comment,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'support_ticket_id' => $this->ticketID
        ]);

        $this->comment = '';

        session()->flash('message', 'Comment Added Successfully!');
    }

    public function removeComment($commentID) {
        $comment = CommentModel::find($commentID);
        $comment->delete();

        session()->flash('message', 'Comment Deleted Successfully!');
    }

    public function selectedTicket($ticketID) {
        $this->ticketID = $ticketID;
    }

    public function render()
    {
        return view('livewire.comment', [
            'comments' => CommentModel::where('support_ticket_id', $this->ticketID)->latest()->paginate(3)
        ]);
    }
}
