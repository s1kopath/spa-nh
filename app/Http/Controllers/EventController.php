<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * for authentication
     */
    public function AuthCheck()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return;
        } else {
            return Redirect::to('/admin-panel')->send();
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AuthCheck();

        $eventDatas = Event::all();
        $manage_events = view('backend.events.browse',compact('eventDatas'));
        return view('backend.admin_master',compact('manage_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_events = view('backend.events.edit_add');
        return view('backend.admin_master', compact('add_events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'event_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'event_title' => ['required'],
            'event_content' => ['required'],
            'start_date' => ['date'],
            'end_date' => ['date'],
            'status' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            if ($request->hasFile('event_image')){
                $fileName = md5(time()).'.'.$request->file('event_image')->extension();
                $request->file('event_image')->storeAS('public/events_image_folder',$fileName);
                $data['event_image'] = $fileName;
            }

            //dd($data);
            Event::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->AuthCheck();

        $eventData = Event::findOrFail($id);
        $edit_event = view('backend.events.edit_add',compact('eventData'));
        return view('backend.admin_master', compact('edit_event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'event_title' => ['required'],
            'event_content' => ['required'],
            'start_date' => ['date'],
            'end_date' => ['date'],
            'status' => ['required'],
        ]);

        $eventData = Event::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_event_image', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['event_image'] = $request->old_event_image;

            if ($request->hasFile('event_image')) {

                /*$request->validate([
                    'event_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/events_image_folder/'.$request->old_event_image);
                if ($exists == true){
                    Storage::delete('public/events_image_folder/'.$eventData->event_image);
                }

                $fileName = md5(time()).'.'.$request->file('event_image')->extension();
                $request->file('event_image')->storeAS('public/events_image_folder',$fileName);
                $data['event_image'] = $fileName;

            }

            $eventData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventData = Event::findOrFail($id);
        $exists = Storage::exists('public/events_image_folder/'.$eventData->event_image);

        try {
            if ($exists == true){
                Storage::delete('public/events_image_folder/'.$eventData->event_image);
            }

            $eventData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Event deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $eventData = Event::findOrFail($id);
        try {
            if ($eventData->status == 1)
            {
                $eventData->update(['status' => '2']);
            }else{
                $eventData->update(['status' => '1']);
            }
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Event status updated successfully.');

    }

}
