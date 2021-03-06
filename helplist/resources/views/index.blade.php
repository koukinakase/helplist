@extends('layouts.app')

@section('content')
  <div class="container"> 
        @foreach($tasks as $task)
            <div class="card">
              <div class="card-header">
                <div class="row justify-content-between">
                  <div class="col-2">依頼者:{{ $task->user->name }}</div>
                  <div class="col-3 text-right">期限：{{ $task->deadline }}</div>
                </div>  
              </div>
              <div class="card-body">
                <div>内容：{{ $task->title }}</div>
                <div class="row justify-content-between mt-5">
                  <div class="col-2">
                    <a href="/tasks/{{ $task->id }}">詳細</a>
                  </div>
                  <div class="col-2 text-right">募集:{{ $task->number }}人</div>

                  @if(Auth::id() === $task->user_id)
                  <div class="col-2">
                    <form method="POST" action="{{ route('tasks.delete', $task->id) }}">
                      @csrf
                      <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                  </div>
                  @endif
                </div>  
              </div>  
            </div>          
        @endforeach
  </div>
@endsection