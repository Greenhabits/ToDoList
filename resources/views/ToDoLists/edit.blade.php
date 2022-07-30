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
            <div class='content__category_id'>
            <h2>カテゴリー</h2>
            <input type='number' name='to_do_lists[category_id]' value="{{ $to_do_lists->category_id }}" min="1" max="20">
            </div>
        <div class="date">
            <h2>有効期限</h2> 
             <input type="dateTime" name='to_do_lists[date_id]' value="0000-00-00 00:00:00"/>
        </div>
          <div class="status">
        <h2>状態</h2>
        <input type="number" name="to_do_lists[status_id]" value='$to_do_lists.status_id' min="1" max="3"/>
    </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
@endsection