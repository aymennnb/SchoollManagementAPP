@extends('layout')
@section('title','home page')
@section('content')
<div class="container">
        <div class="col-md-12">
            <h1>home pages<hr>
        </div>
        <x-users-table :langues="$langues"/>
</div>
@endsection