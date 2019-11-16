{!! Form::open(['route' => 'submit', 'class' => 'submit', 'id' => 'submit', 'method' => 'GET']) !!}
<select name="procode">
    <option value="choose">Chọn projects</option>
    @foreach ($pro as $pr)
        <option value="{{$pr->pro_code}}">{{$pr->pro_name}} - {{ $pr->sub_name }}</option>
    @endforeach
</select>

{!! Form::submit('Send Project',['class'=> 'btn btn-lg btn-info pull-right btn-submit']) !!}

{!! Form::close() !!}
<?php
var_dump($mem);
// var_dump($projects);
var_dump($pro);
die();
?>


@extends('laravel-authentication-acl::admin.layouts.base-2cols')