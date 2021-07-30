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
        'task_description',
        'task_status'
    ];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}
