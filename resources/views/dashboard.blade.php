
$username = $_POST["username"]
$password = $_POST["password"]


@extends('masterpage')

@section('content')

    @if($username == "gizem" && $password == 1234)
        <h1>Welcome gizem!</h1>

        @else
        <h1>Invalid username or password</h1>
    @endif


    @stop


