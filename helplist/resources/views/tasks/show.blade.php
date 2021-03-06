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
                <div class="border border-dark">{{ $task->body }}</div>
                <br>
                <br>
                <br>
                <div class="col-４ text-left h4">募集人数:　{{ $task->number }}人</div>
                <br>
                <div class="col-４ text-left h4">応募人数:　{{ $helpuser }}人</div>
                <br>
                @auth
                @if( $task->number > $helpuser && $task->user->id != Auth::id() )
                  @unless($helped)
                  <form method="POST" action="{{ route('helps.add', $task->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-success">応募する</button>
                  </form>
                  @else
                    <form method="POST" action="{{ route('helps.remove', $task->id) }}">
                      @csrf
                      <P>*応募人数に到達するまでは応募を取り消すことができます。*</p>
                      <button type="submit" class="btn btn-danger">応募を取り消す</button>
                    </form>
                  @endunless
                  @elseif( $task->user->id != Auth::id() )
                  <button type="submit" class="btn btn-secondary">募集は終了しました</button>
                  @else
                  <div class="col-４ text-left h4">現在応募者：</div>
                  @foreach( $task->helpedusers as $user)
                  <div class="col-４ text-left h4">{{ $user->name }}　さん</div>
                  @endforeach  
                  @endif
                @endauth
              </div>  
            </div>  
    </div>       
  </div>
@endsection