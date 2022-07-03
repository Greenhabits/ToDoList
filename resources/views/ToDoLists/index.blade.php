<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>wannabe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Easy ToDo</h1>
        <div class='ToDoLists'>
            @foreach ($ToDoLists as $to_do_lists)
                <div class='to_do_lists'>
                    <h2 class='title'>{{ $to_do_lists->title }}</h2>
                    <p class='body'>{{ $to_do_lists->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $ToDoLists->links() }}
        </div>
    </body>
</html>