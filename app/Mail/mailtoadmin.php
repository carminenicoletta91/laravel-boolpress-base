<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;
class mailtoadmin extends Mailable
{
    use Queueable, SerializesModels;
    public $post;
    public $action;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post,$action)
    {
      $this -> post = $post;
      $this -> action =$action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mailadmin');
    }
}
