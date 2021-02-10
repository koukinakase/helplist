@extends('layouts.app')

@section('content')
  <div class="container"> 
    <div class="text-center">
            <div class="card">
              <div class="card-header">
                <div class="row justify-content-between">
                  <div class="col-3 text-left">依頼者:{{ $task->user->name }}</div>
                  <div class="col-4 text-right">期限:{{ $task->deadline }}</div>
                </div>  
              </div>
              <div class="card-body">
                <div class="text-left h4">詳細内容：</div>
                <textarea name="body" style="width:100%; height:250px;">{{ $task->body }}</textarea>
                <br>
                <br>
                <br>
                <div class="col-４ text-left h4">募集人数:{{ $task->number }}人</div>
                <br>
                <div class="col-４ text-left h4">応募人数:　人</div>
              </div>  
            </div>  
    </div>       
  </div>
@endsection