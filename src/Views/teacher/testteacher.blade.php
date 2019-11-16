<?php

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
    <?php if(isset($error)) {   ?>
        <h3><?php echo $error; ?></h3>
    <?php  } else { ?>
        <div class="form-submit">

            {!! Form::open(['route' => ['addpro'], 'class' => 'submit', 'id' => 'submit']) !!}

            <select name="classlist" id="allclasslist">
                    @foreach ($classlist as $cl)
                    <option value="{{ $cl->cl_code }}">{{ $cl->sub_name }}</option>
                    @endforeach
            </select>

            {!! Form::submit('Add Project',['class'=> 'btn btn-lg btn-info pull-right btn-submit']) !!}

            {!! Form::close() !!}

            {!! Form::open(['route' => ['addstu'], 'class' => 'submit', 'id' => 'submit']) !!}

            <select name="classlist" id="allclasslist">
                    @foreach ($classlist as $cl)
                    <option value="{{ $cl->cl_code }}">{{ $cl->sub_name }}</option>
                    @endforeach
            </select>

            {!! Form::submit('Add Student Into Project',['class'=> 'btn btn-lg btn-info pull-right btn-submit']) !!}

            {!! Form::close() !!}
        </div>
    <?php } ?>
    @stop
</body>
</html>