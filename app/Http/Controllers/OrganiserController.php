<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organiserrole;
use App\Models\Organiser;
use App\Models\Organiseruser;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\File;
class OrganiserController extends Controller
{
    public function index()
    {
        $organiser=Organiser::where('user_id',Auth::user()->id)->get();
      
        return view('customer.organiser.index',compact('organiser'));
    }

    public function create()
    {
        return view('customer.organiser.create');
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:organisers,email',
            'page_url' => 'required|string|max:255|unique:organisers,page_url',
            'website_link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'phone' => 'required'
        ]);

        $organiser = new Organiser;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/logo',$filename);
            $organiser->logo=$filename;
         }
        $organiser->user_id = Auth::user()->id;
        $organiser->name= $request->name;
        $organiser->email= $request->email;
        $organiser->phone_no= $request->phone;
        $organiser->page_url = $request->page_url;
        $organiser->website_link= $request->website_link;
        $organiser->bio= $request->organiser_bio;
        $organiser->description_event_page= $request->description;
        $organiser->facebook_link= $request->facebook_link;
        $organiser->twitter_link= $request->twitter_link;
        $organiser->instagram_link= $request->insta_link;
        $organiser->save();

        $organiserUser = new Organiseruser;
        $organiserUser->organiser_id = $organiser->id;
        $organiserUser->user_id = Auth::user()->id;
        $organiserUser->organiserrole_id = 1;
        $organiserUser->created_at = now();
        $organiserUser->save();

        return redirect()->back()->with('message', 'Organiser Created Successfully!');
    }

    public function edit()
    {
        $organiser= Organiser::where('user_id',Auth::user()->id)->first();  
        return view('customer.organiser.edit', compact('organiser'));
    }

    public function update(Request $request){
        $organiser = Organiser::where('user_id',Auth::user()->id)->first();
        $request->validate([

            'name' => 'required',
            'page_url' => [
                'required',
                'string',
                'unique:organisers,page_url,'.$organiser->id
            ],
            'email' => [
                'required',
                'email',
                'unique:organisers,email,'.$organiser->id
            ],

            'website_link' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'phone' => 'required'
        ]);

       

        if($request->hasfile('image')){
            $checkimage= 'uploads/logo/'.$organiser->image;
            if(File::exists($checkimage)){
    
               File::delete($checkimage);
            }
            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/logo',$filename);
            $organiser->logo=$filename;
          }

        $organiser->name= $request->name;
        $organiser->email= $request->email;
        $organiser->phone_no= $request->phone;
        $organiser->page_url = $request->page_url;
        $organiser->website_link= $request->website_link;
        $organiser->bio= $request->organiser_bio;
        $organiser->description_event_page= $request->description;
        $organiser->facebook_link= $request->facebook_link;
        $organiser->twitter_link= $request->twitter_link;
        $organiser->instagram_link= $request->insta_link;
        $organiser->update();

        return redirect()->back()->with('message', 'Organiser Updated Successfully!');
    }
}