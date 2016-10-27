@extends('layouts.master')

@section('title', 'Generate Lorem Ipsum Text')

@section('content')
    <h1>Generate Lorem Ipsum Text</h1>

    {{-- Form to accept user input --}}
    <form method='POST' action='/loremipsum'>

        {{ csrf_field() }}

        <h2>No. of paragraphs:  &nbsp;&nbsp;
        <input type='text' name='NoOfParagraphs' maxlength="2" value='{{ old("title") }}'></h2>
        <br>
        <input type='submit' class="button" value='Generate Text'>

        {{-- Throws an error if the input is anything else other than a number between 1-99 --}}
        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
