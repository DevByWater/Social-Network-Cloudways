@extends('layouts.master')

@section('body')
 <div class="row">
     <h1>{{ $users->total() }} users</h1>
     <div class="col-md-12">
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item" style="margin-top: 10px">
                    <span>
                        {{ $user->name }}
                    </span>
                    <span style="text-align: center">
                        @ <strong>{{ $user->email }}</strong>
                    </span>
                    <span class="pull-right">

                        Joined ({{ $user->created_at->diffForHumans() }})
                        <button class="btn btn-xs btn-primary">+ Follow</button>
                    </span>
                </li>
            @endforeach
            {{ $users->links() }}
        </ul>
     </div>
 </div>



@endsection