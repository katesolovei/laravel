<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    <title>TASKS | EDIT </title>
</head>
<body>
<div class="container font-weight-bold" align="center">
    <h1 class="page-header font-weight-bold">Edit your Task</h1>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <div class="container">
            <div class="container container-fluid p-2 my-3 font-weight-bold">
                <lable for='task_name' class="text-dark font-weight-bold text-lg-center">Task Name</lable>
                <input class="input-group-append border border-dark-2" type="text" name="task_name" value="{{$tasks->task_name}}"/>
            </div>
            <div class="container container-wrap">
                <lable for='task_description' class="text-dark font-weight-bold text-lg-center">Task Description</lable>
                <textarea class="input-group-append" name="task_description" >{{$tasks->task_description}}</textarea>
            </div>
                <div class="dropdown container container-wrap">
                    <select class="btn border-dark dropdown-toggle" name="task_status">
                        @for($i = 0; $i < 3; $i++)
                            @switch($i)
                                @case(0)
                                    <?php $task_status_name = 'New';?>
                                @break
                                @case(1)
                                    <?php $task_status_name = 'In Process';?>
                                @break
                                @case(2)
                                    <?php $task_status_name = 'Ready';?>
                                @break
                                @default
                                <?php $task_status_name = '';?>
                            @endswitch
                            @if($i == $tasks->task_status)
                                <option class="dropdown-item" value="{{$tasks->task_status}}" selected><?php echo $task_status_name?></option>
                            @else
                                <option class="dropdown-item" value="{{$i}}"><?php echo $task_status_name?></option>
                            @endif
                        @endfor
                    </select>
                </div>
            <div class="container container-wrap">
                <input type="number" value="{{$tasks->id}}" class="text-hide" name="id">
                <input class="btn btn-success my-3 w-25" type="submit" value="Edit"/>
            </div>
        </div>
    </form>
    <a href="/index" class="w-25 font-size-base card-link">Back</a>
</div>
<script src="/js/app.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>

<?php
