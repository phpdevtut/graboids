<?php

declare(strict_types=1);

namespace Graboids\Controllers;

use Graboids\Models\Comment;
use Graboids\Models\Graboid;

class GraboidCommentsController
{
    public function __construct()
    {
        if (empty($_SESSION['user_id'])) {
            header('Location: /login');
        }
    }

    public function store(int $graboidId)
    {
        $commentText = $_POST['comment'];

        $graboid = Graboid::find($graboidId);

        // let's create a comment
        Comment::create([
            'comment' => $commentText,
            'commentable_id' => $graboidId,
            'commentable_type' => get_class($graboid),
        ]);

        header('Location: /' . $graboidId);
    }
}
