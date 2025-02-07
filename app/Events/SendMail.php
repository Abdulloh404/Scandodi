<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $to;
    public $subject;
    public $message;
    public $attachement;
    /**
     * Create a new event instance.
     * @param $to
     * @param $subject
     * @param $message
     * @param $attachement

     * @return void
     */
    public function __construct($to, $subject, $message,$attachment=null)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->attachement=$attachment;
    }



    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
