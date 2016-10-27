@extends('layouts.master')

@section('title', 'Generate Random Users')

@section('content')
    <h1>Generate Random Users</h1>
    <form method='POST' action='/users'>

        {{ csrf_field() }}
        <h2>No. of users:  &nbsp;&nbsp;
        <input type='text' name='NoOfUsers' maxlength="2" value='{{ old("title") }}'></h2>
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
