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
        $name = $request->get('eventName');
        $dateTime = $request->get('dateTime');
        $location = $request->get('location');
        $hargaTiket = $request->get('hargaTiket');
        $description = $request->get('description');

        $new_event = new \App\events();
        $new_event->evenName = $name;
        if($request->file('poster')){
            $image_path = $request->file('poster')
                ->store('event_images', 'public');
            $new_event->poster = $image_path;
        }
        $new_event->dateTime = $dateTime;
        $new_event->location = $location;
        $new_event->hargaTiket = $hargaTiket;
        $new_event->description = $description;
        $new_event->save();

        return redirect()->route('/events')->with('status', 'Category successfully created');

    }
}
