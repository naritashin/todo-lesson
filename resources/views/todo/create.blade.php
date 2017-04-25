@extends('app')

@section('content')
<div class="container">
    <h2 class="page-header">ToDo作成</h2>
    {!! Form::open(['route' => 'todo.store']) !!}
    <!-- form開始, route名を指定 -->
        <div class="form-group">
            {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'ToDo内容']) !!}
            <!-- inputタグ作成, (type, name, 初期入力, [required, class名, placeholder]) -->
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
    {!! Form::close() !!}
</div>
@endsection