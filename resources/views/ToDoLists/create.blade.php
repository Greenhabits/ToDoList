<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo</title>
       <link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
    </head>
    <body>
        <h1><font color=purple>Easy ToDo</font></h1>
        <form action="/ToDoLists" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="todolists[title]" placeholder="タイトル" value="{{ old('todolists.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('todolists.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="todolists[body]" placeholder="今日も1日お疲れさまでした。">{{ old('todolists.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('todolists.body') }}</p>
            </div>
            <div class="category">
            <h2>Category</h2>
            <select name="todolists[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
</div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>