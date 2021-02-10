@extends('layouts.app')

@section('content')
  <div class="container"> 
        @foreach($tasks as $task)
            <div class="card">
              <div class="card-header">
                <div class="row justify-content-between">
                  <div class="col-2">依頼者:{{ $task->user->name }}</div>
                  <div class="col-4　text-left">期限：{{ $task->deadline }}</div>
                </div>  
              </div>
              <div class="card-body">
                <div>内容：{{ $task->title }}</div>
                <div class="row justify-content-between mt-5">
                  <div class="col-2">
                    <a href="/tasks/{{ $task->id }}">詳細</a>
                  </div>
                  <div class="col-2">人数:{{ $task->number }}人</div>
                  <div class="col-2">

                  @if(Auth::id() === $task->user_id)
                    <form method="POST" action="{{ route('tasks.delete', $task->id) }}">
                      @csrf
                      <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                  @endif
                  </div>
                </div>  
              </div>  
            </div>         
        @endforeach
  </div>
@endsection