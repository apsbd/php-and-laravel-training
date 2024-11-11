<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tasks</h1>

    @foreach ($tasks as $task)
        <li><a href="/tasks/{{ $task['id']}}">{{ $task['title'] }}</a></li>
    @endforeach
</body>
</html>
