<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eventarija</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-color: #ffffff;
            }

            .full-height {
                height: 15vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .event_title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .events {
                position: relative;
                left: 100px;
                width: 600px;
            }

            .main_title {
                text-align: center;
                font-size: 60px;
                margin-bottom: 30px;
            }

            .categories {
                text-align: center;
                font-size: 20px;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
{{--            Login/Registar buttons--}}
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
        </div>

        <div class="main_title">
            Eventarija
        </div>

        <div class="categories">
            <a href="/">All Categories</a>:
{{--            <form action="/">--}}
{{--                <button type="submit" class="button is-link">All categories</button>--}}
{{--            </form>--}}
            @foreach($categories as $category)
                <form action="/" method="get" style="display: inline">
                    <input value="{{ $category->name }}" type="hidden" name="category" }}>
                    <button type="submit" class="button is-link">{{ $category->name }}</button>
                </form>
            @endforeach
        </div>

        <div class="events">
            @foreach($events as $event)
                <div class="event_title">
                    <a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                </div>
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