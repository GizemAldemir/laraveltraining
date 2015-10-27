@extends('masterpage')
@section('content')



<form action="/login" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); //For security. It protect data which was post. ?>">
    <h1>Welcome to Catland</h1>
    <p>Please log in</p>
    <input type="submit" value="Log in">
</form>


  @if(count($animal))

    <h1>Animals I like </h1>
    <ul>
        @foreach($animal as $animals)
            <li>
               {{ $animals }}
            </li>

            @endforeach

    </ul>

    @endif

@stop


@section('footer')

    <script>alert('LOGIN PLEASE!');</script>

    @stop
