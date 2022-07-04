<!-- body内だけを表示しています。 -->
<link href="{{ asset('css/style.css?20220703') }}" rel="stylesheet">
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/ToDoLists/{{ $todolists->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='todolists[title]' value="{{ $todolists->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='todolists[body]' value="{{ $todolists->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>