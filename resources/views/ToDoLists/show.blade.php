<?php
$date_id = new DateTime('2022-08-02 09:20:30');
?>
<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <!-- Fonts -->
        <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <form action="/ToDoLists/{{ $to_do_lists->id }}" id="form_delete" method="POST">
                {{@csrf_field()}}
                {{@method_field('DELETE')}}
                <input type="submit" style="display:none">
                <p class='delete'><button type="button" onclick="return deleteTodoList(this);">delete</button></p>
            </form>
        <div class="content">
            <div class="content__to_do_lists">
                <h3>本文</h3>
                <p>{{ $to_do_lists->body }}</p>    
            </div>
        </div>
         <a href="/categories/{{ $to_do_lists->category->id }}">{{ $to_do_lists->category->name }}</a>
          {{ $to_do_lists->date_id }}<br>
            <a href="">{{ $to_do_lists->status->name }}</a>
        <div class="footer">
            <p class="edit">[<a href="/ToDoLists/{{ $to_do_lists->id }}/edit">edit</a>]</p>
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
@endsection