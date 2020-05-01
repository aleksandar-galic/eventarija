@extends('layouts.app')

@section('content')
    <form method="post" action="/event/store">
        @csrf
        <div class="container">
            <br>
            <label for="title">Naslov</label>
            <input name="title" placeholder="Unesi ime dogadjaja">

            <br>
            <label for="date">Datum</label>
            <input name="date" placeholder="Kog je datuma?">

            <br>
            <label for="time">Vreme</label>
            <input class="time" name="time" placeholder="U koje vreme?">

            <br>
            <label for="place">Mesto</label>
            <input name="place" placeholder="Gde se dogadjaja odrzava?"> 

            <br><br>
            <label for="description">Opis</label>
            <textarea name="description" placeholder="Opisi dogadjaj"></textarea>

            <br>
            <label for="category">Izaberi kategorije (max 3)</label><br>
            @foreach($categories as $category)
                <input type="checkbox" name="categories[]" value="{{ $category->id }}"> {{ $category->name }}
            @endforeach
            <br>
            <button type="submit">Napravi</button>
        </div>
    </form>
@endsection