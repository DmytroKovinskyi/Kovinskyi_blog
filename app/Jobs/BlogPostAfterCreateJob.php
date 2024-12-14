<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\BlogPost;
use Illuminate\Foundation\Queue\Queueable;

class BlogPostAfterCreateJob implements ShouldQueue
{
    use Queueable;

    /**
     * @var BlogPost
     */
    private $blogPost;
    public function __construct(BlogPost $blogPost)
    {
        $this->blogPost = $blogPost;
    }

    public function handle()
    {
        logs()->info("Створено новий запис в блозі [{$this->blogPost->id}]");
    }

    /**
     * Execute the job.
     */

}
