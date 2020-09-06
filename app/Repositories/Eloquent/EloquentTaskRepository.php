<?php

namespace App\Repositories\Eloquent;

use App\Task;
use App\Repositories\Contracts\TaskRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentTaskRepository extends AbstractRepository implements TaskRepository
{
    public function entity()
    {
        return Task::class;
    }
}
