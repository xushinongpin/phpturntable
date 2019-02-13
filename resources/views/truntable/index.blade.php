@extends('layouts.app')

@section('content')
    <example-component>
        {{ csrf_field() }}
    </example-component>
@endsection