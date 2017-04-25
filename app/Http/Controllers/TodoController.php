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
}
