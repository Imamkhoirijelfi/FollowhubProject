<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\events;
use App\User;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;


class EventsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {
        $events=events::get();
        return view('events.events', compact('events'));
    }
    public function create()
    {
        return view('events.createEvent');
    }

    public function store(Request $request)
    {
        $new_event = new \App\events();
        $new_event->eventName = $request->get('eventName');
        $new_event->dateTime = $request->get('dateTime');
        $new_event->location = $request->get('location');
        $new_event->hargaTiket = $request->get('hargaTiket');
        $new_event->description = $request->get('description');
        if($request->file('poster')){
            $file = $request->file('poster')->store('event-image', 'public');
            $new_event->poster = $file;
        }
        $new_event->save();
        return redirect('/events')->with('status', 'Category successfully created');

    }
}
