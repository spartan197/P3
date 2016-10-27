@extends('layouts.master')

@section('title', 'Generate Random Password')

@section('content')
    <h1>Generate Random Password</h1>
    <form method='POST' action='/password'>

        {{ csrf_field() }}

        <input type='submit' class="button" value='Generate Password'>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
