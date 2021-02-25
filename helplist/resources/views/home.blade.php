@extends('layouts.app')

@section('content')
<div class="h-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center">
                <div class="card-header"><h4>ログインしました！</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <h4>早速依頼を作成しましょう!</h4>
                    <br>
                    <br>
                    <br>
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-lg">依頼作成</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
