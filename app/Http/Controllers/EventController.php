<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.event.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the form
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
        ]);

        //check the image
        $photo_path = '';
        //upload via storage
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/photos');
        }

        //store the data
        $events = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'start_time' => $request->start_time,
            'venue' => $request->venue,
            'photo' => $photo_path,
        ]);
        //redirect to events.index
        if($events){
            //redirect with success message
            return redirect()->route('events.index')->with('success','Event created successfully');
        } else {
            //redirect with error message
            return redirect()->route('events.index')->with('errors','Event creation failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //get event by id
        $events = Event::find($id);
        $categories = Category::all();
        return view('admin.event.edit', compact('events','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'start_time' => 'required',
            'venue' => 'required',
        ]);
        //update data
        $events = Event::find($id);
        $events->title = $request->title;
        $events->description = $request->description;
        $events->category_id = $request->category_id;
        $events->start_time = $request->start_time;
        $events->venue = $request->venue;
        //redirect to events.index
        if($events->save()){
            //redirect with success message
            return redirect()->route('events.index')->with('success','Event updated successfully');
        } else {
            //redirect with error message
            return redirect()->route('events.index')->with('errors','Event update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //delete data
        $events = Event::find($id);
        $events->delete();
        //redirect to events.index
        if($events){
            //redirect with success message
            return redirect()->route('events.index')->with('success','Event deleted successfully');
        } else {
            //redirect with error message
            return redirect()->route('events.index')->with('errors','Event deletion failed');
        }
    }
}
