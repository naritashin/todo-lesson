@extends('app')
<!-- app.blade.phpを使用 -->

@section('content')
<div class="container">
    <h2 class="page-header">ToDo編集</h2>
    {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <!-- putmethodでリクエストを送ってる -->
    <div class="form-group">
        {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
        <!-- id=$idのレコードのtitleを表示 -->
    </div>
    <button type="submit" class="btn btn-success pull-right">更新</button>
    {!! Form::close() !!}
</div>
@endsection