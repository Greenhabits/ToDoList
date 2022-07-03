<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Easy ToDo</h1>
        <a href='/ToDoLists/create'>create</a>
        <div class='ToDoLists'>
            @foreach ($ToDoLists as $to_do_lists)
                <div class='to_do_lists'>
                    <h2 class='title'>
    <a href="/ToDoLists/{{ $to_do_lists->id }}">{{ $to_do_lists->title }}</a></h2>
                    <p class='body'>{{ $to_do_lists->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $ToDoLists->links() }}
        </div>
    </body>
</html>