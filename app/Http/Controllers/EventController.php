<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;use App\Models\Category;
use App\Models\EventType;
use App\Models\Subcategory;
use App\Models\Country;
use App\Models\Language;
use App\Models\Organiser;
use App\Models\Coupons;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event_types = EventType::where('status',0)->orderBy('id','DESC')->get();
        $categories = Category::where('status',0)->orderBy('id','DESC')->get();
        $subcategories = Subcategory::where('status',0)->orderBy('id','DESC')->get();
        $countries = Country::where('status',0)->orderBy('id','DESC')->get();
        $languages = Language::where('status',0)->orderBy('id','DESC')->get();
        $coupon = Coupons::where('organiser_id',2)->orderBy('id','DESC')->first();
        $organisers = Organiser::where('status',0)->get();
        $couponUsageCount = 0;

        if ($coupon) {
            $couponUsageCount = Event::where('coupon_code', $coupon->coupon_code)->count();

            if ($couponUsageCount >= $coupon->no_of_events) {
                $coupon = null;
            }
        }
        return view('event.create',compact('event_types','categories','subcategories','countries','languages','coupon','couponUsageCount','organisers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            // Define custom validation messages
            $messages = [
                'organiser_id.required' => 'The organiser field is required.',
                'name.required' => 'The event title field is required.',
                'summary.required' => 'The summary field is required.',
                'type_id.required' => 'The event type field is required.',
                'category_id.required' => 'The category field is required.',
                'subcategory_id.required' => 'The subcategory field is required.',
                'country_id.required' => 'The country field is required.',
                'language_id.required' => 'The language field is required.',
            ];

            // Validate the request with custom messages
            $request->validate([
                'organiser_id' => 'required',
                'name' => 'required',
                'summary' => 'required',
                'type_id' => 'required',
                'category_id' => 'required',
                'subcategory_id' => 'required',
                'country_id' => 'required',
                'language_id' => 'required',
            ], $messages);
            
            $event = new Event;
            $user = Auth::user();
            $event->user_id =  $user->id;
            $event->name = $request->name;
            $event->user_id = $user->id;
            $event->type_id = $request->type_id;
            $event->category_id = $request->category_id;
            $event->subcategory_id = $request->subcategory_id;
            $event->tags = implode(',', $request->tags); 
            $event->venue_type = $request->venue_type;
            $event->organiser_id = $request->organiser_id;
            $event->full_address = $request->full_address;
            $event->address_one = $request->address_one;
            $event->address_two = $request->address_two;
            $event->city = $request->city;
            $event->state = $request->state;
            $event->post_code = $request->post_code;
            $event->country_id = $request->country_id;
            $event->language_id = $request->language_id;
            $event->online_link = $request->online_link;
            $event->starts_date = $request->starts_date;
            $event->ends_date = $request->ends_date;
            $event->starts_time = $request->starts_time;
            $event->ends_time = $request->ends_time;
            $event->display_start_time = $request->has('display_start_time') ? 1 : 0;
            $event->display_end_time = $request->has('display_end_time') ? 1 : 0;
            $event->video_url = $request->video_url;
            $event->summary = $request->summary;
            $event->decription = $request->decription;
            $event->refund_policy = $request->refund_policy;
            $event->lat_code = $request->lat_code;
            $event->long_code = $request->long_code;
            $event->full_address = $request->full_address;
            $event->address_one = $request->address_one;
            $event->address_two = $request->address_two;
            $event->city = $request->city;
            $event->state = $request->state;
            $event->online_platform = $request->online_platform;
            $event->platfrom_url = $request->platfrom_url;
            $event->how_to_join = $request->how_to_join;
            $event->event_type = $request->event_type;
            $event->ending_on_date = $request->ending_on_date;
            $event->after_event = $request->after_event;
            $event->multi_event_starts_date = $request->multi_event_starts_date;
            $event->multi_event_ends_date = $request->multi_event_ends_date;
            $event->multi_event_starts_time = $request->multi_event_starts_time;
            $event->multi_event_ends_time = $request->multi_event_ends_time;
            $event->recurring_event_start_date = $request->recurring_event_start_date;
            $event->recurring_event_starts_time = $request->recurring_event_starts_time;
            $event->recurring_event_ends_time = $request->recurring_event_ends_time;
            $event->recurrence = $request->recurrence;
            $event->monthly_option = $request->monthly_option;
            $event->yearly_option = $request->yearly_option;
            $event->ending_type = $request->ending_type;
            $event->coupon_code = $request->coupon_code;
            
            if (!empty($request->coupon_code)) {
                $event->coupon_code = $request->coupon_code;
            }
    
            if ($request->has('days')) {
                $event->days = implode(',', $request->days);
            } else {
                $event->days = null;
            }
    
            $event->save();
        
            return redirect()->route('events.index')->with('success', 'Event created successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
