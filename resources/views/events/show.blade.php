@extends('layouts.app')

@section('content')
    <div class="container">
        <br><h1 class="title">{{ $event->title }}</h1>

        <div class="showContent">
            <label for="name" class="label">Description</label>
            <div class="content">{{ $event->description }}</div>

            <label for="stock" class="label">Place</label>
            <div class="content">{{ $event->place }}</div>
        </div>

        <div style="padding: 25px;">
            <button type="button" class="button is-link" onclick="window.location='/products/{{$event->id}}/edit'">Edit</button>
        </div>
    </div>
@endsection