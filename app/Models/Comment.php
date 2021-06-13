<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body','user_id','support_ticket_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function supportTicket() {
        return $this->belongsTo(SupportTicket::class);
    }
}
