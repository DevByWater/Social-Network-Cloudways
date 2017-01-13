@foreach($users as $user)
    <li>{!! $user['first_name'] !!} {!! $user['last_name'] !!} is from {!! $user['location'] !!}</li>
@endforeach