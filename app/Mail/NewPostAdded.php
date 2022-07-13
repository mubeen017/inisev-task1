<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostAdded extends Mailable
{
    use Queueable, SerializesModels;

    private Post $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->post->website->domain . ' Added New Post';
        return $this
            ->subject($subject)
            ->markdown('mail.new-post-added')
            ->with('post', $this->post);
    }
}
