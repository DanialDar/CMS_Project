<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = "inbox";
    protected $fillable = [
        'fromUserId','toUserMail','subject','body','isRead','isReceived','isSent','isStar','isDeleteSender','isDeleteReceiver','isAttachment'
    ];

    //
}
