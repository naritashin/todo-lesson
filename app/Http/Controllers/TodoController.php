<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;//App\Todoの読込
use App\Http\Requests;

class TodoController extends Controller// TodoControllerクラスにControllerクラスを継承
{

  private $todo;// このクラスでしか使えない変数を宣言

  public function __construct(Todo $todo)
  {
    $this->todo = $todo;// Todoモデルのメソッドを$todoに格納
  }

  public function index()
  {
    $todos = $this->todo->all();// 全レコードの取得, all()はModelクラスにある
    return view('todo.index', compact('todos'));// index.blade.phpを表示させる, 取得したレコードを渡す
  }

  public function create()
  {
    return view('todo.create');// create.blade.phpを表示
  }

  public function store(Request $request)
  {
    $input = $request->all();// リクエスト内容を全取得し、&inputに格納
    $this->todo->fill($input);// fillableでtitleのみを抽出
    $this->todo->save();// 取得したtitleを使ってレコード追加

    return redirect()->to('todo');// todoにredirect
  }
}
