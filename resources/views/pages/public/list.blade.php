@extends('welcome')
@section('content')
@if ($datas->isEmpty())
    <h1>there is no data</h1>
@else
    @foreach ($datas as $data)
    {{$data->name}}
    @endforeach 
@endif
   
@endsection