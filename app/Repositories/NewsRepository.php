<?php
namespace App\Repositories;
use App\Post;
class NewsRepository extends Repository
{
    public function __construct(Post $posts){
        $this->model=$posts;
    }
}
