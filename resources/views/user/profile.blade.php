@extends('layouts.app')

<style type="text/css">
    .avatar{
        max-height: 200px;
        border: 1px solid #fff;
        -webkit-border-radius: 10%;
        -moz-border-radius: 10%;
        border-radius: 10%;
        -webkit-box-shadow: 2px 2px 5px rgba(33,33,33, 0.3);
        -moz-box-shadow: 2px 2px 5px rgba(33, 33, 33, 0.3);
        box-shadow: 2px 2px 5px rgba(33, 33, 33, 0.3);
    }
</style>

@section('content')
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img class="avatar" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR5kGX5nzAWfuXmzPWCxdvvuQQ-ipju7ok9bc7M1HtwuTFBmYD6bA" />
                <h2>{{ $user->name }}</h2>
                <h5>{{ $user->email }}</h5>
                <h5>{{ $user->age }}</h5>

                <button class="btn btn-success">+ Follow</button>
            </div>
        </div>
    </div>
</div>
@endsection