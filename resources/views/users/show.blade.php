@extends('layouts.app')
@section('title',$user->name.'的个人中心')
@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="card">
            <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1594307452289&di=c13d035f8dddab03fbd21f75428a843e&imgtype=0&src=http%3A%2F%2Fpic0.qiyipic.com%2Fimage%2F20180425%2F1b%2Fa7%2Fv_115783662_m_601_180_101.jpg" alt="card-img-top">
            <div class="card-body">
                <h5><strong>个人简介</strong></h5>
                <p>{{$user->introduction}}</p>
                <hr>
                <h5><strong>注册于</strong></h5>
                <p>{{$user->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
            <h1 class="mb-0" style="font-size:22px;">{{$user->name}}<small>---{{$user->email}}</small></h1>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                无数据
            </div>
        </div>
    </div>
</div>
@stop
