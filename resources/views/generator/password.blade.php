@extends('layouts.master')

@section('title', 'Generate Random Password')

@section('content')
    <h1>Generate Random Password</h1>
    {{-- Form to accept user input --}}
    <form method='POST' action='/password'>

        {{ csrf_field() }}

        <input type='submit' class="button" value='Generate Password'>


    </form>
@endsection
