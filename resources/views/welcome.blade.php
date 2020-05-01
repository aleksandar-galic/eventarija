<!DOCTYPE html>
<html>
    <head>
        <title>Eventarija</title>

        <!-- Fonts -->
        <link href="/public/css/app" rel="stylesheet">
    </head>
    <body>
        {{--Login/Registar buttons--}}
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url ('/event/create') }}">Create Your Event</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="main_title">
            Eventarija
        </div>

        <div class="categories">
            <a href="/">All Categories</a>:
            @foreach($categories as $category)
                <form action="/" method="get">
                    <input value="{{ $category->name }}" type="hidden" name="category" }}>
                    <button type="submit">{{ $category->name }}</button>
                </form>
            @endforeach
        </div>

        <div class="events">
            @foreach($events as $event)
                <div class="event_title">
                    <a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                </div>

                <img src="/storage/images/{{ $event->image }}">

                <div>
                    {{ $event->place }}
                </div>
                <div>
                    {{ $event->description }}
                </div>
                <div>
                    {{ $event->date }}
                </div>
                <div>
                    {{ $event->time }}
                </div>
                <div>
                    @foreach($event->categories as $category)
                        <a href="/?category= {{ $category->name }} ">{{ $category->name }}</a>
                    @endforeach
                </div>
                <br>
            @endforeach
        </div>
    </body>
</html>