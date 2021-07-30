<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
//    use App\Models\User;


    /***
     * @var array[]
     */
    protected $fillable = [
        'task_name',
        'task_description'
    ];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}
//
//$user=App\Models\User::find(1);
//
//foreach ($user->tasks as $task) {
//    echo $task->task_name;
//    echo $task->task_description;
//    echo $task->task_owner;
//    echo $task->task_status;
//}
