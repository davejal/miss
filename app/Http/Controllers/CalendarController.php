<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventModel;
use MaddHatter\LaravelFullcalendar\Event;
class CalendarController extends Controller
{
	public function index()
    {
		$events = [];
		
		
		$events[] = \Calendar::event(
			'Dave\'s Birthday', //event title
			true, //full day event?
			'2015-11-17T0000', //start time (you can also use Carbon instead of DateTime)
			'2015-11-17T1159', //end time (you can also use Carbon instead of DateTime)
			23 //optionally, you can specify an event ID
		);
		
		
		
		$event = EventModel::all();
		
		foreach ($event as $eve) {
			$eve->url = "www.google.com";
			//dd($eve->url);
			$events[] = \Calendar::event(
				$eve->title, //event title
				$eve->allDay, //full day event?
				$eve->start, //start time (you can also use Carbon instead of DateTime)
				$eve->end, //end time (you can also use Carbon instead of DateTime)
				$eve->id, //optionally, you can specify an event ID
				"www.google.com"
				//$eve->patient_id, //optionally, you can specify an event ID
			);
			
		}
		
		$eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

		//$calendar = \Calendar::addEvents($events); 
		$calendar = \Calendar::addEvents($events) //add an array with addEvents
    ->addEvent($eloquentEvent, [ //set custom color fo this event
        'color' => '#200',
    ])->setOptions([ //set fullcalendar options
        'firstDay' => 1,
	])
	->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
        'viewRender' => 'function() {alert("Callbacks!");}'
    ])
	/**->setCallbacks(['dayClick'=>'function() {
        alert("a day has been clicked!");}'
	])
	**/
	;
	
	
		return view('calendar.index', compact('calendar'));
		//return $calendar;
	}
}