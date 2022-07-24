<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo</title>
       <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <form action="/ToDoLists" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="to_do_lists[title]" placeholder="タイトル" value="{{ old('to_do_lists.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('to_do_lists.title') }}</p>
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="to_do_lists[body]" placeholder="今日も1日お疲れさまでした。">{{ old('to_do_lists.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('to_do_lists.body') }}</p>
            </div>
            <div class="category">
            <h2>カテゴリー</h2>
            <select name="to_do_lists[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="date">
                <h2>有効期限</h2>
                <input type="dateTime" name="to_do_lists[date_id]"  value="0000-00-00 00:00:00" />
                <p class="date__error" style="color:red">{{ $errors->first('to_do_lists.date_id') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection