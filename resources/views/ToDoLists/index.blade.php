<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <h1><font color=purple>Easy ToDo</font></h1>
        <a href='/ToDoLists/create'>create</a>
        <div class='ToDoLists'>
            @foreach ($ToDoLists as $todolists)
                <div class='todolists'>
                    <h2 class='title'>
    <a href="/ToDoLists/{{ $todolists->id }}">{{ $todolists->title }}</a></h2>
                    <p class='body'>{{ $todolists->body }}</p> 
                     <a href="/categories/{{ $todolists->category->id }}">{{ $todolists->category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $ToDoLists->links() }}
        </div>
    </body>
</html>