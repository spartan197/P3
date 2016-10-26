@extends('layouts.master')

@section('title', 'Generate Lorem Ipsum Text')

@section('content')
    <h1>Generate Lorem Ipsum Text</h1>
    <form method='POST' action='/users'>

        {{ csrf_field() }}

        <h2>No. of users:  &nbsp;&nbsp;
        <input type='text' name='noofusers' maxlength="2" value='{{ old("title") }}'></h2>
        <br>
        <input type='submit' class="button" value='Generate Users'>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
