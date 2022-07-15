<!-- body内だけを表示しています。 -->
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/ToDoLists/{{ $to_do_lists->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='to_do_lists[title]' value="{{ $to_do_lists->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='to_do_lists[body]' value="{{ $to_do_lists->body }}">
            </div>
        <div class="category">
            <h2>Category</h2>
            <select name="to_do_lists[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
             <div class="complete">
            <h2>Complete</h2>
            <select name="to_do_lists[complete_id]">
                @foreach($completes as $complete)
                    <option value="{{ $complete->id }}">{{ $$complete->name }}</option>
                @endforeach
            </select>
        </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
@endsection