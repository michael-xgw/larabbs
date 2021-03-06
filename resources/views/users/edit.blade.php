@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i>编辑个人资料
                </h4>
            </div>
            <div class="card-body">
                <form action="{{route('users.update',$user->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @include('shared._error')
                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input type="text" class="form-control" name="name" id="name-field" value="{{old('name',$user->name)}}">
                    </div>

                    <div class="form-group">
                        <label for="email-field">邮箱</label>
                        <input type="text" class="form-contrl" name="email" id="email-field" value="{{old('email',$user->email)}}">
                    </div>

                    <div class="form-group">
                        <label for="introduction-field">个人介绍</label>
                        <textarea name="introduction" id="introduction-field" class="form-control"  rows="3" >
                            {{old('introduction',$user->introduction)}}
                        </textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label for="" class="avatar-label">用换头像</label>
                        <input type="file" name='avatar' class="form-control-file">

                        @if($user->avatar)
                            <br>
                            <img src="{{$user->avatar}}" class="thumbnail img-responsive" width="200">
                        @endif
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop