@extends('layouts.app')

@section('content')
    <div class="container" style="display: flex; flex-direction: column;">
        <h1>{{ $event->title }}</h1>

        <img src="/storage/images/{{ $event->image }}">
        
        <b>Description</b>
        <div>
        	{{ $event->description }}
        </div>

        <b>Place</b>
        <div>
        	{{ $event->place }}
        </div>

        <b>Date</b>
        <div>
        	{{ $event->date }}
        </div>

        <b>Time</b>
        <div>
        	{{ $event->time }}
        </div>

	    @auth
	    	<div style="padding: 25px;">
	            <a href="/products/{{ $event->id }}/edit">Edit</a>
	        </div>
	    @endauth
    </div>
@endsection