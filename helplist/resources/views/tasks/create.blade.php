@extends('layouts.app')

@section('content')
<br>
  <h1 class="text-center">依頼作成ページ</h1>
<br>  
<div class="border border-3 border-secondary col-8 mx-auto">
  <form method="post" action="{{ route('tasks.store') }}">
    @csrf
    <br>
    期限：<input type="date" name="deadline" value="" />
    <br>
    <br>
    人数：<input name="number" type="text" value="" />人
    <br>
    <br>
    内容：
    <br>
    <input name="title" style="width:100%; height:70px;"　type="text" value="" />
    <br>
    <br>
    詳細：
    <br>
    <textarea name="body" style="width:100%; height:250px;">詳細内容</textarea>
    <br>
    <br>
    <div class="text-center">
    　<button type="submit" class="btn btn-success">作成する</button>
    </div>
  </form>
  <br>
</div>  
@endsection