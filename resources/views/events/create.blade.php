@extends('layouts.app')

@section('content')
    <form method="get" action="/event/store">
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
            <label for="category">Kategorija</label>
            <select name="category" placeholder="Gde se dogadjaja odrzava?">
                @foreach($categories as $category)
                    <option value=" {{ $category->name }} ">{{ $category->name }}</option>
                @endforeach
            </select>

            <br>
            <button type="submit">Napravi</button>
        </div>
    </form>
@endsection