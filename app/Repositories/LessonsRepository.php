<?php
namespace App\Repositories;
use App\Lesson;
class LessonsRepository extends Repository
{
    public function __construct(Lesson $lessons){
        $this->model=$lessons;
    }
}
