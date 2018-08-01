@extends('layout')

@section('content')
<h1>This is the index Relation!</h1>
        {!! \BadChoice\Hurricane\Html\Index::make($relationResource)->display() !!}
@stop

