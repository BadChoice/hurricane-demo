@extends('layout')

@section('content')
<h1>This is the index!</h1>
        {!! \BadChoice\Hurricane\Html\Index::make($resource)->display() !!}
@stop

