@extends('laravel-authentication-acl::admin.layouts.base-2cols')
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit</title>
    <link rel="stylesheet" href="{{ asset('packages/student/css/dropzone.min.css') }}">
    <script src="{{ asset('packages/student/js/dropzone.min.js') }}"></script>
    <style>
        .form-submit{
            margin-top: 10%;
        }
        #submit{
            margin-top: 2%;
        }

        .class
    </style>
</head>
<body>
    @section('content')
    <div class="form-submit">
        {!! Form::open(['route' => ['submit-up'], 'class' => 'dropzone', 'id' => 'dropzonewidget']) !!}

        {!! Form::close() !!}

        {!! Form::open(['route' => ['submit-up'], 'class' => 'submit', 'id' => 'submit', 'files' => true]) !!}

        {!! Form::file('file', ['class'=> 'btn-lg pull-left file']) !!}

        {!! Form::submit('Submit',['class'=> 'btn btn-lg btn-info pull-right btn-submit']) !!}

        {!! Form::close() !!}
    </div>
    @stop
</body>
</html>