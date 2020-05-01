<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = new Event;

        if ($request->has('category'))
        {
            $events = $events->whereHas('categories', function($query) use($request) {
                $query->where('name', '=', $request->category);
            });
        }

        $events = $events->get();

        $categories = Category::all('name');

        return view('welcome', compact(['events', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all('id', 'name');

        return view('events/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event_data = $request->except('categories');
        $event_data['creator_id'] = $request->user()->id;
        $event_data['image'] = '3229c6412afee5a713263b41243f193e.jpg'; //hardcoded. Make an image import on view. Then delete this line

        $event = new Event();

        $event_id = $event->create($event_data)->id;

        $event->find($event_id)->categories()->attach($request->categories);

        return redirect("/events/{$event_id}")->with('success', 'Event successfuly created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}