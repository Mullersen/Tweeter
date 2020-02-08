@extends('layouts.app')

@section('content')
    <p>Are you sure you want to delete the Tweet?</p>
    <strong>{{$tweet->content}}</strong>
    <form action='/tweet/deleteTweet/yes' method='get'>
        @csrf
        <button type='submit' name='id' value='{{$tweet->id}}'>Yes</button>
    </form>
    <form action='/tweet/showTweet' method='get'>
        @csrf
        <button type='submit'name='id' value='{{$tweet->id}}'>No, take me back</button>
    </form>
@endsection
