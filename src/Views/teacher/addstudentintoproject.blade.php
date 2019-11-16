<?php
    if(isset($fail)) {
        echo $fail;
    }
    if(isset($_POST['classlist'])){
        $class = $_POST['classlist'];
    }
    $sub = substr($class, 2);
?>
@extends('laravel-authentication-acl::admin.layouts.base-2cols')
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>

</head>
<body>
    @section('content')
    <div class="form-submit">

        {!! Form::open(['route' => ['submit-up'], 'class' => 'submit', 'id' => 'submit']) !!}



        {!! Form::submit('Add Student',['class'=> 'btn btn-lg btn-info pull-right btn-submit']) !!}

        {!! Form::close() !!} 
    </div>
    @stop
</body>
</html>