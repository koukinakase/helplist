<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.app')

@section('content')
<div class="content1">
    <div class="pp">
        <div class="h1">Helpリストへようこそ！</div>
        <br>
        <div class="h3">*Helpリストとは*</div>
        <br>
        <p class="description">自分一人では処理できないタスクを協力してくれる人々を募集するアプリです。<br>逆に募集して協力することもできます。</p>
        <br>
        <div class="start">早速始めてみましょう！</div>
        <br>
        <br>
        <div class="button"><a href="{{ route('login') }}" class="btn　btn-outline-secondary btn-lg">Login</a>or<a href="{{ route('register') }}" class="btn　btn-outline-secondary btn-lg">新規登録</a></div>
    </div>
</div>    
@endsection