@extends('layouts.master')

@section('title')
 Blade
@endsection


@section('body')
    <div class="jumbotron">
        <h1>Blade</h1>
        <h3>This is the blade test page</h3>

        <p>Your gender is @if($gender=='male')
                                male
                          @elseif($gender=='female')
                                female
                          @else
                                neutral
                          @endif
        </p>
        <p class="lead">
            @unless(empty($text))
                {{$text}}
            @endunless
        </p>
        <p class="lead">
            {{ isset($variableDoesNotExist) ? $variableDoesNotExist : 'Variable does not exist' }}
        </p>

    </div>
@endsection
