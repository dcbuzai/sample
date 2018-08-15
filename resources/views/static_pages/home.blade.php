@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Dc de Laravel</h1>
        <p class="lead">
            你现在看到的是<a href="#">我创建的</a>项目主页.
        </p>
        <p>
            一切将开始了哦~
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop