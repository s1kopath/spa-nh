<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OurConcerns;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class OurConcernsController extends Controller
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

        $concernDatas = OurConcerns::all();
        $manage_concern = view('backend.our_concerns.browse',compact('concernDatas'));
        return view('backend.admin_master',compact('manage_concern'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_concern = view('backend.our_concerns.edit_add');
        return view('backend.admin_master', compact('add_concern'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'concern_image' => ['required','mimetypes:image/jpeg,image/jpg,image/png', 'max:1024'],
            'concern_title' => ['required'],
            'concern_url' => ['required'],
            'status' => ['required'],
        ]);

        $data = $request->except('_token', 'admin_id');

        try {
            $data['created_by'] = $request->admin_id;

            if ($request->hasFile('concern_image')){
                $fileName = md5(time()).'.'.$request->file('concern_image')->extension();
                $request->file('concern_image')->storeAS('public/concern_image_folder',$fileName);
                $data['concern_image'] = $fileName;
            }

            OurConcerns::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Concern created successfully.');
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

        $concernData = OurConcerns::findOrFail($id);
        $edit_concern = view('backend.our_concerns.edit_add',compact('concernData'));
        return view('backend.admin_master', compact('edit_concern'));
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
            'concern_title' => ['required'],
            'concern_url' => ['required'],
        ]);

        $concernData = OurConcerns::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_concern_image');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['concern_image'] = $request->old_concern_image;

            if ($request->hasFile('concern_image')) {

                $request->validate([
                    'concern_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:1024'],
                ]);

                $exists = Storage::exists('public/concern_image_folder/'.$request->old_concern_image);
                if ($exists == true){
                    Storage::delete('public/concern_image_folder/'.$concernData->concern_image);
                }

                $fileName = md5(time()).'.'.$request->file('concern_image')->extension();
                $request->file('concern_image')->storeAS('public/concern_image_folder',$fileName);
                $data['concern_image'] = $fileName;

            }

            $concernData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Concern updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concernData = OurConcerns::findOrFail($id);
        $exists = Storage::exists('public/concern_image_folder/'.$concernData->concern_image);

        try {
            if ($exists == true){
                Storage::delete('public/concern_image_folder/'.$concernData->concern_image);
            }

            $concernData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Concern deleted successfully.');
    }


    public function statusActiveInactive($id)
    {
        $concernData = OurConcerns::findOrFail($id);
        try {
            if ($concernData->status == 1)
            {
                $concernData->update(['status' => '2']);
            }else{
                $concernData->update(['status' => '1']);
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
            ->with('success', 'Concern status updated successfully.');

    }


}
