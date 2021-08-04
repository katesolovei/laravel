<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    <title>TASKS | HOME</title>
</head>
<body>
<div class="container" align="center">

    <h1>Task List</h1>
    <h3>
        <x-alert/>
        <a href="/create">Create new task</a>
    </h3>
    <table class="table table-bordered align-content-sm-center col-8">
        <tr class="border-dark">
            <th class="col-3">№</th>
            <th class="col-3">Title</th>
            <th class="col-3">Desription</th>
            <th class="col-3">Task Status</th>
            <th class="col-3"></th>
        </tr>
        @foreach($tasks as $task)
            @switch($task->task_status)
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
            <tr class="text-dark border-dark">
                <td class="col-4">{{$task->id}}</td>
                <td class="col-4">{{$task->task_name}}</td>
                <td class="col-4">{{$task->task_description}}</td>
                <td class="col-4"><?php echo $task_status_name?></td>
                <td class="font-weight-bold my-2">
                    <a class="btn btn-success" href="{{asset('/edit/' . $task->id )}}">Edit task</a>
                    <a class="btn btn-danger" href="{{asset('/delete' . $task->id )}}">Delete task</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<script src="/js/app.js"></script>
</body>
</html>
