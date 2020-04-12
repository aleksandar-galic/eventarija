@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a href="event/create" class="button">Crate Your Event</a >
    </div>
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Events</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You have no events. 
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection