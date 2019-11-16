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
        {!! Form::open(['route' => ['todoaddpro'], 'class' => 'submit', 'id' => 'submit']) !!}

        <!-- name -->
        {{ Form::label('title', 'Title') }} 
        {{ Form::text('titles') }}
        <br>
        {{ Form::label('class', 'Class') }}
        {{ Form::text('classes', $class) }}
        <br>
        {{ Form::label('class', 'Subject') }}
        {{ Form::text('subs', $sub) }}
        <br>
        <!-- description -->
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('descriptions') }}      
        <br>
        {{ Form::label('timneend', 'Time to end project') }}
        {{ Form::input('datetime-local', 'da') }}
        <br>
        {{ Form::submit('Add!') }}

        {{ Form::close() }}
    </div>
    @stop
</body>
</html>