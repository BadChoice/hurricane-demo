@extends('layout')

@section('content')
<h1>This is the edit</h1>
{!! \BadChoice\Hurricane\Html\Edit::make($resource, $object)->display() !!}
@stop