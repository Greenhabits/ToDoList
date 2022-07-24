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
        <div class="back">[<a href="/">back</a>]</div>
        <div class='paginate'>
            {{ $to_do_lists->links() }}
        </div>
    </body>
</html>
@endsection