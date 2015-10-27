@extends('masterpage')
@section('content')





<form action="/dashboard" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    Username : <input type="text" name="username" id="username">
    Password : <input type="text" name="password" id="password">
    <input type="submit" value="Save">
    </form>

 @stop



