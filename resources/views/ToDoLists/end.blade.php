<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <a href='/ToDoLists/index'>Home</a>
        <div class='ToDoLists'>
            @foreach ($to_do_lists as $to_do_list)
                <div class='to_do_list'>
                    <h2 class='title'>
    <a href="/ToDoLists/{{ $to_do_list->id }}">{{ $to_do_list->title }}</a></h2>
                    <p class='body'>{{ $to_do_list->body }}</p> 
                     <a href="/categories/{{ $to_do_list->category->id }}">{{ $to_do_list->category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $to_do_lists->links() }}
        </div>
    </body>
</html>
@endsection