<?php

namespace App\Repositories;

use App\Interfaces\PostInterface;
use App\Models\Post;

class PostRepository extends ModelRepository implements PostInterface
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }
}