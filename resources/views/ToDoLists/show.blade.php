<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $todolists->title }}
        </h1>
        <form action="/ToDoLists/{{ $todolists->id }}" id="form_delete" method="POST">
                {{@csrf_field()}}
                {{@method_field('DELETE')}}
                <input type="submit" style="display:none">
                <p class='delete'><button type="button" onclick="return deleteTodoList(this);">delete</button></p>
            </form>
        <div class="content">
            <div class="content__todolists">
                <h3>本文</h3>
                <p>{{ $todolists->body }}</p>    
            </div>
        </div>
         <a href="/categories/{{ $todolists->category->id }}">{{ $todolists->category->name }}</a>
        <div class="footer">
            <p class="edit">[<a href="/ToDoLists/{{ $todolists->id }}/edit">edit</a>]</p>
            <a href="/">戻る</a>
        </div>
        <script>
        function deleteTodoList(e){
                'use strict';
                console.log('end');
                if(confirm('削除すると復元できません \n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script> 
    </body>
</html>