<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Post;

class PostRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleTags;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }
}
