<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    <title>TASKS | CREATE</title>
</head>
<body>
<div class="container font-weight-bold" align="center">
    <h1 class="page-header font-weight-bold">Create your Task</h1>
    <h3>
        <x-alert/>
    </h3>
    <form class="form-text" action="/upload" method="post">
        @csrf
        <div class="container container-fluid col-12">
            <div class="container container-fluid p-2 my-3 ">
                <lable for='task_name' class="text-dark font-weight-bold text-md-center">Task Name</lable>
                <input class="input-group-append border border-dark-2" type="text" name="task_name"/>
            </div>
            <div class="container container-fluid">
                <lable for='task_description' class="text-dark font-weight-bold text-md-center">Task Description</lable>
                <textarea class="input-group-append" name="task_description" ></textarea>
            </div>
            <div class="container container-fluid">
                <input class="btn btn-success my-3 w-25" type="submit" value="Create"/>
            </div>
        </div>
    </form>
    <a href="/index" class="alert-link w-25 font-size-base page-link">Back</a>
</div>
<script src="/js/app.js"></script>
</body>
</html>

<?php
